MY DRAIN DR — PHP Backend
==========================

Files in this folder:
  inquiry.php          ← Main form handler (edit config at top)
  inquiries_mysql.sql  ← Run this in phpMyAdmin to create the table
  PHPMailer/           ← Download PHPMailer here (see DOWNLOAD_INSTRUCTIONS.txt)

SETUP STEPS:
1. Edit inquiry.php — fill in DB_NAME, DB_USER, DB_PASS at the top
2. Download PHPMailer (see PHPMailer/DOWNLOAD_INSTRUCTIONS.txt)
3. In cPanel phpMyAdmin → run inquiries_mysql.sql
4. Upload everything to public_html/

FOLDER STRUCTURE ON SERVER:
  public_html/
  ├── index.html
  ├── css/
  ├── js/
  ├── pages/
  └── api/
      ├── inquiry.php
      ├── PHPMailer/
      │   └── src/
      │       ├── PHPMailer.php
      │       ├── SMTP.php
      │       └── Exception.php
