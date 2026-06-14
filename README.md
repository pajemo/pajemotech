# Pajemotech Website

Official source code for the Pajemotech website.

## Overview

This is a multi-page PHP website for Pajemotech, a web design and development company in Ghana. The site includes service pages, portfolio, blog content, legal pages, and a contact form mail handler.

## Tech Stack

- PHP (server-rendered pages)
- HTML5/CSS3
- Vanilla JavaScript
- Apache (recommended via XAMPP)

## Project Structure

- `index.php` - homepage
- `about.php`, `services.php`, `portfolio.php`, `contact.php` - core pages
- `blog.php` and `blog-*.php` - blog listing and articles
- `mailer.php` - contact form processing and email sending
- `includes/` - shared header/footer
- `assets/css/` - stylesheets
- `assets/js/` - client-side scripts
- `assets/images/` - site images and metadata files

## Requirements

- PHP 7.4+ (PHP 8.x recommended)
- Apache web server
- XAMPP (for local development on Windows)

## Local Development (XAMPP)

1. Place the project in your XAMPP web root:
   - `c:/xampp/htdocs/pajemotech`
2. Start Apache from XAMPP Control Panel.
3. Open the site in your browser:
   - `http://localhost/pajemotech/`

## Contact Form Configuration

The contact form backend is in `mailer.php`.

Before production use, update SMTP/email variables in `mailer.php`:

- `$SMTP_HOST`
- `$SMTP_PORT`
- `$SMTP_USERNAME`
- `$SMTP_PASSWORD`
- `$FROM_EMAIL`
- `$TO_EMAIL`

Note: The current implementation uses PHP `mail()` for sending. Ensure your server is correctly configured for outbound mail.

## SEO Files

- `robots.txt`
- `sitemap.xml`
- `SEO-CHECKLIST.md`

## Deployment Notes

- Verify mail settings on the target server.
- Keep file/folder permissions secure.
- Enable HTTPS in production.
- Review `.htaccess` rules before deploying.

## Contributing

1. Create a branch from `main`
2. Commit with clear messages
3. Open a pull request

## License

All rights reserved unless otherwise specified by Pajemotech.
