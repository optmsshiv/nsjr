<?php
/**
 * My Drain DR — Inquiry Handler (PHP + MySQL + Gmail SMTP)
 * Handles all 3 form submissions:
 *   - Home page  "Get a Free Estimate"   (source: homepage)
 *   - Contact    "Get Your Free Quote"   (source: contact_quote)
 *   - Contact    "Send a Quick Message"  (source: contact_quick)
 *
 * Each submission:
 *   1. Saved to MySQL database
 *   2. Gmail notification sent to business owner
 *   3. Auto-reply confirmation sent to customer (if email provided)
 *
 * Upload this file to: /public_html/api/inquiry.php
 * Requires PHPMailer in:  /public_html/api/PHPMailer/
 */

/* ── CORS headers ───────────────────────────────────────────── */
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false, 'message' => 'Method not allowed.']);
    exit;
}

/* ════════════════════════════════════════════════════════════
   ⚙️  CONFIGURATION — fill in your real values below
   ════════════════════════════════════════════════════════════ */

// ── MySQL ──────────────────────────────────────────────────────
define('DB_HOST', 'localhost');
define('DB_NAME', 'your_database_name');   // e.g. username_mydrain
define('DB_USER', 'your_database_user');   // e.g. username_dbuser
define('DB_PASS', 'your_database_password');

// ── Gmail SMTP ─────────────────────────────────────────────────
define('GMAIL_USER', 'drain.dr8@gmail.com');       // Gmail address that sends emails
define('GMAIL_PASS', 'eags cugf myvu nubg');        // Gmail App Password (16 chars)
define('OWNER_EMAIL', 'drain.dr8@gmail.com');       // Where YOU receive inquiry alerts
define('BUSINESS_NAME', 'My Drain DR');
define('BUSINESS_PHONE', '(516) 402-9213');
define('BUSINESS_ADDRESS', '1204 Pipeline Ave, Dallas TX 75201');

/* ══════════════════════════════════════════════════════════════ */

/* ── Rate limiting via MySQL (5 requests per IP per 15 min) ── */
function checkRateLimit(mysqli $db, string $ip): bool {
    $db->query("
        CREATE TABLE IF NOT EXISTS rate_limits (
            ip VARCHAR(45) NOT NULL,
            requests INT DEFAULT 1,
            window_start DATETIME NOT NULL,
            PRIMARY KEY (ip)
        )
    ");
    $ip = $db->real_escape_string($ip);
    $row = $db->query("SELECT * FROM rate_limits WHERE ip='$ip'")->fetch_assoc();
    $now = date('Y-m-d H:i:s');

    if (!$row) {
        $db->query("INSERT INTO rate_limits (ip, requests, window_start) VALUES ('$ip', 1, '$now')");
        return true;
    }
    $windowStart = strtotime($row['window_start']);
    if (time() - $windowStart > 15 * 60) {
        $db->query("UPDATE rate_limits SET requests=1, window_start='$now' WHERE ip='$ip'");
        return true;
    }
    if ((int)$row['requests'] >= 5) return false;
    $db->query("UPDATE rate_limits SET requests=requests+1 WHERE ip='$ip'");
    return true;
}

/* ── Connect to MySQL ─────────────────────────────────────────── */
$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($db->connect_error) {
    http_response_code(500);
    echo json_encode(['ok' => false, 'message' => 'Database connection failed.']);
    exit;
}
$db->set_charset('utf8mb4');

/* ── Create inquiries table if not exists ────────────────────── */
$db->query("
    CREATE TABLE IF NOT EXISTS inquiries (
        id          INT AUTO_INCREMENT PRIMARY KEY,
        created_at  DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
        source      VARCHAR(50)  NOT NULL,
        first_name  VARCHAR(100) NOT NULL,
        last_name   VARCHAR(100) DEFAULT '',
        email       VARCHAR(255) DEFAULT '',
        phone       VARCHAR(50)  DEFAULT '',
        service     VARCHAR(100) DEFAULT '',
        urgency     VARCHAR(100) DEFAULT '',
        address     TEXT         DEFAULT '',
        message     TEXT         DEFAULT '',
        status      VARCHAR(20)  NOT NULL DEFAULT 'new'
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4
");

/* ── Rate limit check ─────────────────────────────────────────── */
$ip = $_SERVER['HTTP_CF_CONNECTING_IP']
    ?? $_SERVER['HTTP_X_FORWARDED_FOR']
    ?? $_SERVER['REMOTE_ADDR']
    ?? '0.0.0.0';

if (!checkRateLimit($db, $ip)) {
    http_response_code(429);
    echo json_encode(['ok' => false, 'message' => 'Too many requests. Please try again later.']);
    exit;
}

/* ── Parse JSON body ──────────────────────────────────────────── */
$body = json_decode(file_get_contents('php://input'), true);
if (!$body) {
    http_response_code(400);
    echo json_encode(['ok' => false, 'message' => 'Invalid request.']);
    exit;
}

function clean(array $body, string $key): string {
    return trim(strip_tags($body[$key] ?? ''));
}

$source     = clean($body, 'source')     ?: 'unknown';
$first_name = clean($body, 'first_name');
$last_name  = clean($body, 'last_name');
$email      = strtolower(clean($body, 'email'));
$phone      = clean($body, 'phone');
$service    = clean($body, 'service');
$urgency    = clean($body, 'urgency');
$address    = clean($body, 'address');
$message    = clean($body, 'message');

/* ── Validation ───────────────────────────────────────────────── */
if (strlen($first_name) < 2) {
    http_response_code(400);
    echo json_encode(['ok' => false, 'message' => 'Please enter your name.']);
    exit;
}
if (!$phone && !$email) {
    http_response_code(400);
    echo json_encode(['ok' => false, 'message' => 'Please provide a phone number or email.']);
    exit;
}

/* ── Save to database ─────────────────────────────────────────── */
$stmt = $db->prepare("
    INSERT INTO inquiries
        (source, first_name, last_name, email, phone, service, urgency, address, message)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)
");
$stmt->bind_param('sssssssss',
    $source, $first_name, $last_name,
    $email, $phone, $service, $urgency, $address, $message
);
$stmt->execute();
$inquiry_id = $db->insert_id;
$stmt->close();

/* ── Load PHPMailer ───────────────────────────────────────────── */
require_once __DIR__ . '/PHPMailer/src/Exception.php';
require_once __DIR__ . '/PHPMailer/src/PHPMailer.php';
require_once __DIR__ . '/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function createMailer(): PHPMailer {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = GMAIL_USER;
    $mail->Password   = GMAIL_PASS;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;
    $mail->CharSet    = 'UTF-8';
    $mail->setFrom(GMAIL_USER, BUSINESS_NAME . ' Website');
    return $mail;
}

$isEmergency = stripos($urgency, 'emergency') !== false;

/* ── 1. Owner notification email ─────────────────────────────── */
try {
    $mail = createMailer();
    $mail->addAddress(OWNER_EMAIL);
    $mail->Subject = '[New Inquiry] ' . ($service ?: 'General') . ' — ' . $first_name . ' ' . $last_name . ($isEmergency ? ' 🚨' : '');
    $mail->isHTML(true);
    $emergencyBadge = $isEmergency
        ? '<span style="background:#d9291c;color:#fff;padding:2px 10px;border-radius:4px;font-weight:700;">🚨 EMERGENCY</span>'
        : '';
    $phoneLink  = $phone  ? '<a href="tel:' . $phone . '" style="color:#1560bd;">' . $phone . '</a>' : '—';
    $emailLink  = $email  ? '<a href="mailto:' . $email . '" style="color:#1560bd;">' . $email . '</a>' : '—';
    $callBtn    = $phone  ? '<a href="tel:' . $phone . '" style="display:inline-block;background:#1560bd;color:#fff;padding:12px 24px;border-radius:8px;text-decoration:none;font-weight:700;font-size:14px;">📞 Call Back</a>' : '';
    $replyBtn   = $email  ? '<a href="mailto:' . $email . '" style="display:inline-block;background:#f5a623;color:#0b1d35;padding:12px 24px;border-radius:8px;text-decoration:none;font-weight:700;font-size:14px;">✉️ Reply by Email</a>' : '';
    $msgBlock   = $message ? '
        <div style="margin-top:20px;padding:16px;background:#fff;border-left:4px solid #1560bd;border-radius:4px;">
            <p style="margin:0 0 6px;font-size:12px;color:#6b7280;text-transform:uppercase;letter-spacing:.05em;">Message</p>
            <p style="margin:0;color:#111;font-size:14px;line-height:1.6;">' . nl2br(htmlspecialchars($message)) . '</p>
        </div>' : '';
    $sourceLabel = str_replace('_', ' ', $source);
    $mail->Body = '
    <div style="font-family:Arial,sans-serif;max-width:600px;margin:auto;border:1px solid #e5e7eb;border-radius:12px;overflow:hidden;">
        <div style="background:linear-gradient(135deg,#1560bd,#0b1d35);padding:28px 32px;">
            <h2 style="color:#fff;margin:0;font-size:22px;">🔧 New Service Inquiry</h2>
            <p style="color:rgba(255,255,255,.7);margin:6px 0 0;font-size:13px;">
                Received from: <strong style="color:#fff;">' . htmlspecialchars($sourceLabel) . '</strong>
                &nbsp;·&nbsp; ' . date('M j, Y g:i A') . '
            </p>
        </div>
        <div style="padding:28px 32px;background:#f9fafb;">
            ' . ($emergencyBadge ? '<p style="margin:0 0 20px;">' . $emergencyBadge . '</p>' : '') . '
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
                <tr><td style="padding:8px 0;color:#6b7280;width:140px;">Name</td>
                    <td style="padding:8px 0;font-weight:600;color:#111;">' . htmlspecialchars($first_name . ' ' . $last_name) . '</td></tr>
                <tr style="background:#fff;"><td style="padding:8px 10px;color:#6b7280;">Phone</td>
                    <td style="padding:8px 10px;font-weight:600;color:#111;">' . $phoneLink . '</td></tr>
                <tr><td style="padding:8px 0;color:#6b7280;">Email</td>
                    <td style="padding:8px 0;font-weight:600;color:#111;">' . $emailLink . '</td></tr>
                <tr style="background:#fff;"><td style="padding:8px 10px;color:#6b7280;">Service</td>
                    <td style="padding:8px 10px;font-weight:600;color:#111;">' . htmlspecialchars($service ?: '—') . '</td></tr>
                <tr><td style="padding:8px 0;color:#6b7280;">Urgency</td>
                    <td style="padding:8px 0;font-weight:600;color:#111;">' . htmlspecialchars($urgency ?: '—') . '</td></tr>
                <tr style="background:#fff;"><td style="padding:8px 10px;color:#6b7280;">Address</td>
                    <td style="padding:8px 10px;font-weight:600;color:#111;">' . htmlspecialchars($address ?: '—') . '</td></tr>
            </table>
            ' . $msgBlock . '
            <div style="margin-top:24px;display:flex;gap:12px;">
                ' . $callBtn . '&nbsp;' . $replyBtn . '
            </div>
        </div>
        <div style="padding:16px 32px;background:#f3f4f6;text-align:center;font-size:12px;color:#9ca3af;">
            ' . BUSINESS_NAME . ' · Inquiry #' . $inquiry_id . '
        </div>
    </div>';
    $mail->send();
} catch (Exception $e) {
    error_log('[MyDrainDR] Owner email failed: ' . $e->getMessage());
}

/* ── 2. Customer auto-reply ───────────────────────────────────── */
if ($email) {
    try {
        $mail = createMailer();
        $mail->addAddress($email, $first_name);
        $mail->Subject = 'We got your request, ' . $first_name . '! 🔧 ' . BUSINESS_NAME;
        $mail->isHTML(true);
        $urgencyRow = $urgency ? '<tr><td style="padding:4px 0;color:#6b7280;">Urgency:</td><td style="font-weight:600;">' . htmlspecialchars($urgency) . '</td></tr>' : '';
        $phoneRow   = $phone   ? '<tr><td style="padding:4px 0;color:#6b7280;">Your phone:</td><td style="font-weight:600;">' . htmlspecialchars($phone) . '</td></tr>' : '';
        $mail->Body = '
        <div style="font-family:Arial,sans-serif;max-width:600px;margin:auto;border:1px solid #e5e7eb;border-radius:12px;overflow:hidden;">
            <div style="background:linear-gradient(135deg,#1560bd,#0b1d35);padding:32px;text-align:center;">
                <div style="font-size:40px;margin-bottom:12px;">🔧</div>
                <h1 style="color:#fff;margin:0;font-size:24px;">We\'ve Got Your Request!</h1>
                <p style="color:rgba(255,255,255,.8);margin:10px 0 0;">' . BUSINESS_NAME . ' · Dallas-Fort Worth</p>
            </div>
            <div style="padding:32px;">
                <p style="font-size:16px;color:#111;line-height:1.6;">Hi <strong>' . htmlspecialchars($first_name) . '</strong>,</p>
                <p style="color:#374151;line-height:1.7;margin-top:0;">
                    Thanks for reaching out! We\'ve received your inquiry about
                    <strong>' . htmlspecialchars($service ?: 'plumbing service') . '</strong> and one of our licensed
                    technicians will contact you within <strong>30 minutes</strong> to discuss your needs
                    and provide your free estimate.
                </p>
                <div style="background:#f0f6ff;border:1px solid #bfdbfe;border-radius:10px;padding:20px;margin:24px 0;">
                    <p style="margin:0 0 10px;font-weight:700;color:#1560bd;">📋 Your Request Summary</p>
                    <table style="width:100%;font-size:14px;color:#374151;">
                        <tr><td style="padding:4px 0;color:#6b7280;">Service:</td><td style="font-weight:600;">' . htmlspecialchars($service ?: '—') . '</td></tr>
                        ' . $urgencyRow . '
                        ' . $phoneRow . '
                    </table>
                </div>
                <div style="background:#fff7ed;border:1px solid #fed7aa;border-radius:10px;padding:18px;margin-bottom:24px;">
                    <p style="margin:0;font-size:14px;color:#9a3412;">
                        <strong>🚨 Need us faster?</strong> For emergencies, call us directly 24/7 — no extra charge.
                    </p>
                    <a href="tel:' . BUSINESS_PHONE . '" style="display:inline-block;margin-top:12px;background:#d9291c;color:#fff;padding:10px 22px;border-radius:8px;text-decoration:none;font-weight:700;font-size:14px;">📞 ' . BUSINESS_PHONE . '</a>
                </div>
                <p style="color:#6b7280;font-size:13px;line-height:1.6;">
                    ✅ Licensed &amp; insured &nbsp;·&nbsp; ✅ Upfront flat-rate pricing &nbsp;·&nbsp; ✅ 1-year labor guarantee
                </p>
            </div>
            <div style="background:#f3f4f6;padding:20px 32px;text-align:center;">
                <p style="margin:0;font-size:12px;color:#9ca3af;">
                    ' . BUSINESS_NAME . ' · ' . BUSINESS_ADDRESS . '<br>
                    <a href="mailto:' . GMAIL_USER . '" style="color:#6b7280;">' . GMAIL_USER . '</a>
                </p>
            </div>
        </div>';
        $mail->send();
    } catch (Exception $e) {
        error_log('[MyDrainDR] Customer email failed: ' . $e->getMessage());
    }
}

/* ── Success response ─────────────────────────────────────────── */
echo json_encode([
    'ok'      => true,
    'message' => "Request received! We'll call you within 30 minutes.",
    'id'      => $inquiry_id
]);
