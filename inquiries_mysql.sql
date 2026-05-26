-- ============================================================
--  My Drain DR — MySQL Schema for cPanel
--  Run this in: cPanel → phpMyAdmin → SQL tab
-- ============================================================

CREATE TABLE IF NOT EXISTS inquiries (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    created_at  DATETIME     NOT NULL DEFAULT CURRENT_TIMESTAMP,
    source      VARCHAR(50)  NOT NULL,
    first_name  VARCHAR(100) NOT NULL,
    last_name   VARCHAR(100) DEFAULT '',
    email       VARCHAR(255) DEFAULT '',
    phone       VARCHAR(50)  DEFAULT '',
    service     VARCHAR(100) DEFAULT '',
    urgency     VARCHAR(100) DEFAULT '',
    address     TEXT,
    message     TEXT,
    status      VARCHAR(20)  NOT NULL DEFAULT 'new'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ── Useful queries ──────────────────────────────────────────

-- All new inquiries (most recent first)
SELECT * FROM inquiries WHERE status = 'new' ORDER BY created_at DESC;

-- Today's inquiries
SELECT * FROM inquiries WHERE DATE(created_at) = CURDATE() ORDER BY created_at DESC;

-- Emergency requests only
SELECT * FROM inquiries WHERE urgency LIKE '%Emergency%' ORDER BY created_at DESC;

-- Inquiries by source
SELECT source, COUNT(*) AS total FROM inquiries GROUP BY source ORDER BY total DESC;

-- Mark as contacted
UPDATE inquiries SET status = 'contacted' WHERE id = 1;

-- Mark as closed
UPDATE inquiries SET status = 'closed' WHERE id = 1;

-- Count by status
SELECT status, COUNT(*) AS count FROM inquiries GROUP BY status;
