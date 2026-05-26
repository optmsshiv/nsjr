/**
 * My Drain DR — Backend Server
 * Handles form submissions from:
 *   - Home page  "Get a Free Estimate" card  (source: homepage)
 *   - Contact page "Get Your Free Quote" form (source: contact_quote)
 *   - Contact page "Send a Quick Message"     (source: contact_quick)
 *
 * Each submission:
 *   1. Saved to SQLite database  (data/inquiries.db)
 *   2. Gmail notification sent to business owner
 *   3. Auto-reply confirmation sent to customer
 */

require('dotenv').config();
const express    = require('express');
const cors       = require('cors');
const nodemailer = require('nodemailer');
const rateLimit  = require('express-rate-limit');
const Database   = require('better-sqlite3');
const path       = require('path');
const fs         = require('fs');

const app  = express();
const PORT = process.env.PORT || 3001;

/* ─── Static files (serve the whole site) ─── */
app.use(express.static(path.join(__dirname, '..')));
app.use(express.json());
app.use(cors({ origin: process.env.ALLOWED_ORIGIN || '*' }));

/* ─── Rate limiting: max 5 form submissions per IP per 15 min ─── */
const limiter = rateLimit({
  windowMs: 15 * 60 * 1000,
  max: 5,
  message: { ok: false, message: 'Too many requests. Please try again later.' }
});
app.use('/api/inquiry', limiter);

/* ─── Database setup ─── */
const dbDir = path.join(__dirname, 'data');
if (!fs.existsSync(dbDir)) fs.mkdirSync(dbDir, { recursive: true });

const db = new Database(path.join(dbDir, 'inquiries.db'));

db.exec(`
  CREATE TABLE IF NOT EXISTS inquiries (
    id          INTEGER PRIMARY KEY AUTOINCREMENT,
    created_at  TEXT    NOT NULL DEFAULT (datetime('now')),
    source      TEXT    NOT NULL,          -- homepage | contact_quote | contact_quick
    first_name  TEXT    NOT NULL,
    last_name   TEXT,
    email       TEXT,
    phone       TEXT,
    service     TEXT,
    urgency     TEXT,
    address     TEXT,
    message     TEXT,
    status      TEXT    NOT NULL DEFAULT 'new'  -- new | contacted | closed
  )
`);

const insertInquiry = db.prepare(`
  INSERT INTO inquiries
    (source, first_name, last_name, email, phone, service, urgency, address, message)
  VALUES
    (@source, @first_name, @last_name, @email, @phone, @service, @urgency, @address, @message)
`);

/* ─── Gmail transporter ─── */
const transporter = nodemailer.createTransport({
  service: 'gmail',
  auth: {
    user: process.env.GMAIL_USER,   // your Gmail address
    pass: process.env.GMAIL_PASS    // Gmail App Password (not your regular password)
  }
});

/* ─── Email helpers ─── */

/** Notification email to the business owner */
function ownerEmail(inquiry) {
  const urgencyBadge = inquiry.urgency === 'Emergency — right now'
    ? '<span style="background:#d9291c;color:#fff;padding:2px 10px;border-radius:4px;font-weight:700;">🚨 EMERGENCY</span>'
    : '';

  return {
    from: `"My Drain DR Website" <${process.env.GMAIL_USER}>`,
    to:   process.env.OWNER_EMAIL || process.env.GMAIL_USER,
    subject: `[New Inquiry] ${inquiry.service || 'General'} — ${inquiry.first_name} ${inquiry.last_name || ''} ${urgencyBadge ? '🚨' : ''}`,
    html: `
      <div style="font-family:Arial,sans-serif;max-width:600px;margin:auto;border:1px solid #e5e7eb;border-radius:12px;overflow:hidden;">
        <div style="background:linear-gradient(135deg,#1560bd,#0b1d35);padding:28px 32px;">
          <h2 style="color:#fff;margin:0;font-size:22px;">🔧 New Service Inquiry</h2>
          <p style="color:rgba(255,255,255,.7);margin:6px 0 0;font-size:13px;">
            Received from: <strong style="color:#fff;">${inquiry.source.replace('_', ' ')}</strong>
            &nbsp;·&nbsp; ${new Date().toLocaleString('en-US', { timeZone: 'America/Chicago' })} CST
          </p>
        </div>
        <div style="padding:28px 32px;background:#f9fafb;">
          ${urgencyBadge ? `<p style="margin:0 0 20px;">${urgencyBadge}</p>` : ''}
          <table style="width:100%;border-collapse:collapse;font-size:14px;">
            <tr><td style="padding:8px 0;color:#6b7280;width:140px;">Name</td>
                <td style="padding:8px 0;font-weight:600;color:#111;">${inquiry.first_name} ${inquiry.last_name || ''}</td></tr>
            <tr style="background:#fff;"><td style="padding:8px 10px;color:#6b7280;">Phone</td>
                <td style="padding:8px 10px;font-weight:600;color:#111;">
                  <a href="tel:${inquiry.phone}" style="color:#1560bd;">${inquiry.phone || '—'}</a>
                </td></tr>
            <tr><td style="padding:8px 0;color:#6b7280;">Email</td>
                <td style="padding:8px 0;font-weight:600;color:#111;">
                  ${inquiry.email ? `<a href="mailto:${inquiry.email}" style="color:#1560bd;">${inquiry.email}</a>` : '—'}
                </td></tr>
            <tr style="background:#fff;"><td style="padding:8px 10px;color:#6b7280;">Service</td>
                <td style="padding:8px 10px;font-weight:600;color:#111;">${inquiry.service || '—'}</td></tr>
            <tr><td style="padding:8px 0;color:#6b7280;">Urgency</td>
                <td style="padding:8px 0;font-weight:600;color:#111;">${inquiry.urgency || '—'}</td></tr>
            <tr style="background:#fff;"><td style="padding:8px 10px;color:#6b7280;">Address</td>
                <td style="padding:8px 10px;font-weight:600;color:#111;">${inquiry.address || '—'}</td></tr>
          </table>
          ${inquiry.message ? `
          <div style="margin-top:20px;padding:16px;background:#fff;border-left:4px solid #1560bd;border-radius:4px;">
            <p style="margin:0 0 6px;font-size:12px;color:#6b7280;text-transform:uppercase;letter-spacing:.05em;">Message</p>
            <p style="margin:0;color:#111;font-size:14px;line-height:1.6;">${inquiry.message}</p>
          </div>` : ''}
          <div style="margin-top:24px;display:flex;gap:12px;">
            ${inquiry.phone ? `<a href="tel:${inquiry.phone}" style="display:inline-block;background:#1560bd;color:#fff;padding:12px 24px;border-radius:8px;text-decoration:none;font-weight:700;font-size:14px;">📞 Call Back</a>` : ''}
            ${inquiry.email ? `<a href="mailto:${inquiry.email}" style="display:inline-block;background:#f5a623;color:#0b1d35;padding:12px 24px;border-radius:8px;text-decoration:none;font-weight:700;font-size:14px;">✉️ Reply by Email</a>` : ''}
          </div>
        </div>
        <div style="padding:16px 32px;background:#f3f4f6;text-align:center;font-size:12px;color:#9ca3af;">
          My Drain DR · Dallas-Fort Worth · Inquiry #${Date.now()}
        </div>
      </div>
    `
  };
}

/** Auto-reply email sent to the customer */
function customerEmail(inquiry) {
  if (!inquiry.email) return null;
  return {
    from: `"My Drain DR" <${process.env.GMAIL_USER}>`,
    to:   inquiry.email,
    subject: `We got your request, ${inquiry.first_name}! 🔧 My Drain DR`,
    html: `
      <div style="font-family:Arial,sans-serif;max-width:600px;margin:auto;border:1px solid #e5e7eb;border-radius:12px;overflow:hidden;">
        <div style="background:linear-gradient(135deg,#1560bd,#0b1d35);padding:32px;text-align:center;">
          <div style="font-size:40px;margin-bottom:12px;">🔧</div>
          <h1 style="color:#fff;margin:0;font-size:24px;">We've Got Your Request!</h1>
          <p style="color:rgba(255,255,255,.8);margin:10px 0 0;">My Drain DR · Dallas-Fort Worth</p>
        </div>
        <div style="padding:32px;">
          <p style="font-size:16px;color:#111;line-height:1.6;">
            Hi <strong>${inquiry.first_name}</strong>,
          </p>
          <p style="color:#374151;line-height:1.7;margin-top:0;">
            Thanks for reaching out! We've received your inquiry about
            <strong>${inquiry.service || 'plumbing service'}</strong> and one of our licensed
            technicians will contact you within <strong>30 minutes</strong> to discuss your needs
            and provide your free estimate.
          </p>
          <div style="background:#f0f6ff;border:1px solid #bfdbfe;border-radius:10px;padding:20px;margin:24px 0;">
            <p style="margin:0 0 10px;font-weight:700;color:#1560bd;">📋 Your Request Summary</p>
            <table style="width:100%;font-size:14px;color:#374151;">
              <tr><td style="padding:4px 0;color:#6b7280;">Service:</td><td style="font-weight:600;">${inquiry.service || '—'}</td></tr>
              ${inquiry.urgency ? `<tr><td style="padding:4px 0;color:#6b7280;">Urgency:</td><td style="font-weight:600;">${inquiry.urgency}</td></tr>` : ''}
              ${inquiry.phone  ? `<tr><td style="padding:4px 0;color:#6b7280;">Your phone:</td><td style="font-weight:600;">${inquiry.phone}</td></tr>` : ''}
            </table>
          </div>
          <div style="background:#fff7ed;border:1px solid #fed7aa;border-radius:10px;padding:18px;margin-bottom:24px;">
            <p style="margin:0;font-size:14px;color:#9a3412;">
              <strong>🚨 Need us faster?</strong> For emergencies, call us directly 24/7 — no extra charge.
            </p>
            <a href="tel:+15551234567" style="display:inline-block;margin-top:12px;background:#d9291c;color:#fff;padding:10px 22px;border-radius:8px;text-decoration:none;font-weight:700;font-size:14px;">📞 (555) 123-4567</a>
          </div>
          <p style="color:#6b7280;font-size:13px;line-height:1.6;">
            ✅ Licensed &amp; insured &nbsp;·&nbsp; ✅ Upfront flat-rate pricing &nbsp;·&nbsp; ✅ 1-year labor guarantee
          </p>
        </div>
        <div style="background:#f3f4f6;padding:20px 32px;text-align:center;">
          <p style="margin:0;font-size:12px;color:#9ca3af;">
            My Drain DR · 1204 Pipeline Ave, Dallas TX 75201<br>
            <a href="mailto:hello@mydraindr.com" style="color:#6b7280;">hello@mydraindr.com</a>
          </p>
        </div>
      </div>
    `
  };
}

/* ─── API endpoint: POST /api/inquiry ─── */
app.post('/api/inquiry', async (req, res) => {
  try {
    const {
      source = 'unknown',
      first_name, last_name = '',
      email = '', phone = '',
      service = '', urgency = '',
      address = '', message = ''
    } = req.body;

    /* Basic validation */
    if (!first_name || first_name.trim().length < 2) {
      return res.status(400).json({ ok: false, message: 'Please enter your name.' });
    }
    if (!phone && !email) {
      return res.status(400).json({ ok: false, message: 'Please provide a phone number or email.' });
    }

    const inquiry = {
      source: source.trim(),
      first_name: first_name.trim(),
      last_name:  last_name.trim(),
      email:      email.trim().toLowerCase(),
      phone:      phone.trim(),
      service:    service.trim(),
      urgency:    urgency.trim(),
      address:    address.trim(),
      message:    message.trim()
    };

    /* 1. Save to database */
    const result = insertInquiry.run(inquiry);
    inquiry.db_id = result.lastInsertRowid;

    /* 2. Send emails (don't block response on email failure) */
    const emailPromises = [transporter.sendMail(ownerEmail(inquiry))];
    const autoReply = customerEmail(inquiry);
    if (autoReply) emailPromises.push(transporter.sendMail(autoReply));

    Promise.all(emailPromises).catch(err => {
      console.error('[Email error]', err.message);
    });

    return res.json({
      ok: true,
      message: 'Request received! We\'ll call you within 30 minutes.',
      id: inquiry.db_id
    });

  } catch (err) {
    console.error('[Server error]', err);
    return res.status(500).json({ ok: false, message: 'Something went wrong. Please call us directly.' });
  }
});

/* ─── Admin: list all inquiries (protect this in production!) ─── */
app.get('/api/admin/inquiries', (req, res) => {
  const key = req.query.key;
  if (key !== process.env.ADMIN_KEY) {
    return res.status(401).json({ ok: false, message: 'Unauthorized' });
  }
  const rows = db.prepare('SELECT * FROM inquiries ORDER BY created_at DESC LIMIT 200').all();
  res.json({ ok: true, count: rows.length, inquiries: rows });
});

/* ─── Health check ─── */
app.get('/api/health', (_req, res) => res.json({ ok: true, time: new Date().toISOString() }));

/* ─── Start ─── */
app.listen(PORT, () => {
  console.log(`\n✅ My Drain DR backend running on http://localhost:${PORT}`);
  console.log(`   Gmail user  : ${process.env.GMAIL_USER || '⚠️  Not set — add to .env'}`);
  console.log(`   Owner email : ${process.env.OWNER_EMAIL || process.env.GMAIL_USER || '⚠️  Not set'}`);
  console.log(`   Database    : ${path.join(__dirname, 'data', 'inquiries.db')}\n`);
});
