-- ============================================================
--  My Drain DR — Inquiries Database Schema
--  SQLite (auto-created by server.js on first run)
--  File location: backend/data/inquiries.db
-- ============================================================

CREATE TABLE IF NOT EXISTS inquiries (
  id          INTEGER PRIMARY KEY AUTOINCREMENT,
  created_at  TEXT    NOT NULL DEFAULT (datetime('now')),   -- UTC timestamp
  source      TEXT    NOT NULL,   -- 'homepage' | 'contact_quote' | 'contact_quick'
  first_name  TEXT    NOT NULL,
  last_name   TEXT,
  email       TEXT,
  phone       TEXT,
  service     TEXT,   -- 'Drain Cleaning' | 'Pipe Repair / Replacement' | etc.
  urgency     TEXT,   -- 'At my convenience' | 'This week' | 'Today if possible' | 'Emergency — right now'
  address     TEXT,
  message     TEXT,
  status      TEXT    NOT NULL DEFAULT 'new'  -- 'new' | 'contacted' | 'closed'
);

-- ── Useful queries ──────────────────────────────────────────

-- All new inquiries (most recent first)
SELECT * FROM inquiries WHERE status = 'new' ORDER BY created_at DESC;

-- All inquiries today
SELECT * FROM inquiries
WHERE date(created_at) = date('now')
ORDER BY created_at DESC;

-- Emergency inquiries only
SELECT * FROM inquiries
WHERE urgency = 'Emergency — right now'
ORDER BY created_at DESC;

-- Inquiries by source
SELECT source, COUNT(*) AS total
FROM inquiries
GROUP BY source
ORDER BY total DESC;

-- Mark an inquiry as contacted (replace 1 with actual id)
UPDATE inquiries SET status = 'contacted' WHERE id = 1;

-- Mark an inquiry as closed
UPDATE inquiries SET status = 'closed' WHERE id = 1;

-- Count by status
SELECT status, COUNT(*) AS count FROM inquiries GROUP BY status;
