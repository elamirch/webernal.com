# webernal.com

## Project requests

Requires PHP 8.1+ (`pdo_mysql`, `mbstring`) and MariaDB.

1. Create a database and fill in `.env` using `.env.example`.
2. Run `php bin/setup.php` to create the tables and an admin account. Use `--schema-only` to create just the tables.
3. Sign in at `admin/` to read requests, newest first, with 20 per page.

The Persian and English forms collect name, contact, and description. They use ordinary POST submissions. Sessions keep the admin signed in, validate form tokens, and carry submission feedback across redirects.

Database access is in `php/modules/db.php`; table definitions are directly in `bin/setup.php`. `.env` is ignored by Git. Configure the web server to deny access to `.env`; for Nginx, add `location ~ (^|/)\.env { deny all; }` inside the server block.
