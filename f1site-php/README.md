# Pit Wall — PHP Version

This is the PHP-converted version of the Pit Wall static site. It adds:

1. **Contact Us page** (`contact.php`) — saves every submitted inquiry to the `inquiries` table.
2. **Sign Up** (`register.php`) and **Log In** (`login.php`) — create/authenticate accounts stored in the `users` table, with sessions and a `logout.php` to end them.
3. **Modular PHP** — shared markup lives in `includes/` (`config.php`, `functions.php`, `header.php`, `footer.php`) and is pulled into every page with `include`/`require`, instead of repeating the `<head>`, nav, and footer HTML on every page.

## Setup (XAMPP / WAMP / MAMP or any local PHP+MySQL stack)

1. Place this folder inside your server's web root (e.g. `htdocs/pitwall`).
2. Start Apache and MySQL.
3. Import the database: in phpMyAdmin, open the SQL tab and run the contents of `database/schema.sql` (or via terminal: `mysql -u root -p < database/schema.sql`). This creates the `pitwall_db` database with the `users` and `inquiries` tables.
4. If your MySQL username/password aren't the XAMPP defaults (`root` / empty password), update them in `includes/config.php`.
5. Visit `http://localhost/pitwall/index.php` in your browser.

## Pages

| File | Purpose |
|---|---|
| `index.php` | Home page |
| `products.php` | Store & Experiences |
| `about.php` | About |
| `contact.php` | Contact form → saves to `inquiries` table |
| `register.php` | Sign up form → creates a row in `users` (password hashed with `password_hash`) |
| `login.php` | Login form → verifies against `users` with `password_verify`, starts a session |
| `logout.php` | Destroys the session |

## Folder structure

```
f1site-php/
├── index.php
├── about.php
├── products.php
├── contact.php
├── register.php
├── login.php
├── logout.php
├── includes/
│   ├── config.php      (DB connection + session start)
│   ├── functions.php   (helpers: h(), is_logged_in(), redirect(), flash messages)
│   ├── header.php      (shared <head> + nav, session-aware)
│   └── footer.php      (shared footer + scripts)
├── database/
│   └── schema.sql
├── css/style.css
├── js/script.js
└── assets/, screenshots/
```
