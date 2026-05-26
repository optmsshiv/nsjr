# My Drain DR — Backend Setup Guide

## What this does

Every form submission (from homepage or contact page) is:
1. **Saved** to a SQLite database (`backend/data/inquiries.db`)
2. **Emailed to you** (Gmail) with full inquiry details + quick-call button
3. **Auto-reply sent** to the customer confirming receipt (if they provided email)

---

## Quick Start (5 minutes)

### 1. Get a Gmail App Password

> You need a **Google App Password** — NOT your Gmail login password.

1. Go to **[myaccount.google.com/apppasswords](https://myaccount.google.com/apppasswords)**
2. Make sure **2-Step Verification is ON** on your Google account
3. Click **"Create"** → App name: `MyDrainDR` → Click **Create**
4. Copy the **16-character password** shown (e.g. `abcd efgh ijkl mnop`)

---

### 2. Configure environment

```bash
cd backend
cp .env.example .env
```

Edit `.env` with your real values:

```env
GMAIL_USER=youremail@gmail.com          # Your Gmail
GMAIL_PASS=abcd efgh ijkl mnop          # App Password from step 1
OWNER_EMAIL=youremail@gmail.com         # Where inquiries are sent (can be same)
ADMIN_KEY=some-secret-key-you-choose    # Change this!
```

---

### 3. Install & run

```bash
cd backend
npm install
npm start
```

Server starts at **http://localhost:3001**

To serve the whole site (HTML + API together):
```
http://localhost:3001            → index.html (home page)
http://localhost:3001/pages/contact.html → contact page
http://localhost:3001/api/inquiry        → form endpoint
```

---

## Database

Inquiries are stored in `backend/data/inquiries.db` (SQLite — no setup needed).

### View all inquiries

```
GET http://localhost:3001/api/admin/inquiries?key=YOUR_ADMIN_KEY
```

Returns JSON with all submissions. You can open `inquiries.db` directly with:
- [DB Browser for SQLite](https://sqlitebrowser.org/) (free desktop app)
- VS Code extension: SQLite Viewer

### Schema

| Column       | Type | Description                          |
|-------------|------|--------------------------------------|
| id           | INT  | Auto-increment primary key           |
| created_at   | TEXT | Timestamp (UTC)                      |
| source       | TEXT | `homepage` / `contact_quote` / `contact_quick` |
| first_name   | TEXT | Customer first name                  |
| last_name    | TEXT | Customer last name                   |
| email        | TEXT | Customer email (optional)            |
| phone        | TEXT | Customer phone                       |
| service      | TEXT | Service selected                     |
| urgency      | TEXT | Urgency level selected               |
| address      | TEXT | Property address                     |
| message      | TEXT | Customer message                     |
| status       | TEXT | `new` / `contacted` / `closed`       |

---

## Production Deployment

For deployment on a VPS (e.g. DigitalOcean, Linode):

```bash
npm install -g pm2
pm2 start backend/server.js --name mydrain
pm2 save
pm2 startup
```

Set `ALLOWED_ORIGIN=https://yourdomain.com` in `.env` before deploying.

---

## File Structure

```
mydrain-modified/
├── index.html              ← Home page (with email field + API wired)
├── pages/
│   ├── contact.html        ← Contact page (both forms API wired)
│   ├── services.html
│   ├── about.html
│   └── blog.html
├── css/style.css
├── js/main.js
└── backend/
    ├── server.js           ← Express server (main file)
    ├── package.json
    ├── .env.example        ← Copy to .env and fill in
    ├── .gitignore
    ├── README.md           ← This file
    └── data/
        └── inquiries.db    ← Auto-created on first run
```
