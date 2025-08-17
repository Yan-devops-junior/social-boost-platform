# 🚀 SMM Panel Platform

This project is an **SMM (Social Media Management) Panel** built with **PHP & MySQL**, providing automated order services for social media needs (followers, likes, views, etc.).  
The website includes an ordering system, user management, ticket support system, and multi-payment gateway integration.


## ✨ Key Features

- **Authentication & User Management**
  - User registration, login, logout
  - Profile management

- **Service Ordering**
  - Order various social media services
  - Order history tracking
  - Automatic invoices (Bank, E-Money, Mobile Credit, etc.)

- **Ticket Support System**
  - Users can create support tickets
  - Staff/Admin can reply to tickets

- **Dashboard & Panel**
  - User activity summary
  - Balance & deposit management
  - Order statistics

- **Payment System**
  - Bank payments
  - E-Money (OVO, Dana, Gopay, etc.)
  - Mobile credit

- **Admin / Staff Management**
  - Manage users
  - Control service pricing & orders
  - Handle tickets

- **AJAX & Dynamic Requests**
  - `ajax/` & `get/` folders handle async requests
  - Real-time order status checking

- **Static Pages**
  - Home, About, Terms, FAQ
  - Sitemap & robots.txt for SEO

## Technologies Used

- **Backend**: PHP (native)
- **Frontend**: HTML, CSS, JavaScript (Bootstrap)
- **Database**: MySQL / MariaDB
- **Web Server**: Apache (with `.htaccess`)
- **Plugins & Assets**: jQuery, CSS frameworks (via `assets/` & `plugins/`)

## Installation & Usage

1. Clone or extract the project into your local server folder (`htdocs` for XAMPP / `www` for Laragon).
2. Create a new MySQL database and import the SQL file (if provided).
3. Configure database credentials in `config.php`:
   ```php
   $db_host = "localhost";
   $db_user = "root";
   $db_pass = "";
   $db_name = "smm_panel";
   ```
4. Run Apache & MySQL services.
5. Access the website at:  
   ```
   http://localhost/rebo/
   ```

## Notes

- An Android application (`app.apk`) is included for mobile integration.
- Recommended PHP version ≥ 7.4 for compatibility.
- Use HTTPS in production environments.

## License

This project is for educational and development purposes.  
Feel free to modify and adapt it to your needs.
