# City Mart — E-Commerce Platform

City Mart is a responsive e-commerce web application built with **PHP, MySQL, HTML5, CSS3, and JavaScript**. The platform provides a basic online shopping experience with user authentication, product browsing, shopping cart functionality, order processing, and an administrative dashboard.

> **Project Status:** Development / In Progress
> **Last Updated:** August 2026

---

## 📌 Table of Contents

* [Project Overview](#-project-overview)
* [Features](#-features)

  * [User Features](#user-features)
  * [Admin Features](#admin-features)
* [Technology Stack](#-technology-stack)
* [Database Structure](#-database-structure)
* [Project Structure](#-project-structure)
* [Installation](#-installation)
* [Database Setup](#-database-setup)
* [Configuration](#-configuration)
* [Running the Application](#-running-the-application)
* [Default Login](#-default-login)
* [API Endpoints](#-api-endpoints)
* [Application Workflow](#-application-workflow)
* [Security Considerations](#-security-considerations)
* [Known Limitations](#-known-limitations)
* [Future Enhancements](#-future-enhancements)
* [Troubleshooting](#-troubleshooting)
* [Contributing](#-contributing)
* [License](#-license)
* [Support](#-support)

---

# 🛒 Project Overview

**City Mart** is an e-commerce platform designed to provide customers with a simple and responsive online shopping experience.

Users can:

* Create an account
* Log in and log out
* Browse products by category
* Add products to their shopping cart
* Update product quantities
* Remove products from the cart
* Review their order summary

Administrators can:

* Access a dedicated admin dashboard
* Manage customer orders
* Manage products
* Manage users

The application is designed using a traditional PHP and MySQL architecture and can be deployed easily using **XAMPP, WAMP, MAMP, or another PHP-compatible web server**.

---

# ✨ Features

## 👤 User Features

### Authentication

* User registration
* User login
* User logout
* Session-based authentication
* Role-based access control
* Separate Admin and User roles

### Product Categories

Products can be browsed through different categories:

* 📱 Mobiles
* 💻 Electronics
* 🏠 Appliances
* 👕 Fashion

### Shopping Cart

Users can:

* Add products to the cart
* Remove products
* Increase or decrease quantities
* View product prices
* Calculate the cart total
* Review the order summary

### Responsive Design

The application supports:

* Desktop screens
* Tablets
* Mobile devices
* Responsive navigation
* Mobile hamburger menu
* Responsive product grids

### About Us

The application includes an **About Us** page containing information about City Mart, its services, and company values.

---

# 🛠️ Admin Features

## Admin Dashboard

Administrators have access to a dedicated dashboard for managing the application.

### Product Management

Admins can:

* Add products
* Update products
* Remove products
* Manage product information

### Order Management

Admins can:

* View customer orders
* View ordered products
* View quantities
* View product prices
* Process orders

### User Management

The application supports role-based users:

* Administrator
* Regular customer

---

# 💻 Technology Stack

## Backend

| Technology   | Purpose                               |
| ------------ | ------------------------------------- |
| PHP          | Server-side application logic         |
| MySQL        | Database management                   |
| PDO / MySQLi | Database connectivity                 |
| PHP Sessions | Authentication and session management |

## Frontend

| Technology | Purpose                        |
| ---------- | ------------------------------ |
| HTML5      | Page structure                 |
| CSS3       | Styling and responsive layouts |
| JavaScript | Client-side functionality      |
| AJAX       | Asynchronous requests          |

## External Libraries

| Library      | Purpose              |
| ------------ | -------------------- |
| Boxicons     | UI icons             |
| Ionicons     | UI icons             |
| Font Awesome | UI icons             |
| ScrollReveal | Scroll animations    |
| Google Fonts | Custom typography    |
| Poppins      | Primary website font |

---

# 🗄️ Database Structure

The application uses a MySQL database named:

```text
ecommerce
```

## User Table — `user_form`

| Column      | Type         | Description                 |
| ----------- | ------------ | --------------------------- |
| `id`        | INT          | Primary key, auto increment |
| `name`      | VARCHAR(255) | User's full name            |
| `email`     | VARCHAR(255) | Unique user email           |
| `password`  | VARCHAR(255) | Password hash               |
| `user_type` | ENUM         | `admin` or `user`           |

### Example

```sql
CREATE TABLE user_form (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    user_type ENUM('admin', 'user') DEFAULT 'user'
);
```

---

## Orders Table — `orders`

| Column             | Type          | Description                 |
| ------------------ | ------------- | --------------------------- |
| `id`               | INT           | Primary key, auto increment |
| `product_name`     | VARCHAR(255)  | Name of the ordered product |
| `product_quantity` | INT           | Quantity ordered            |
| `product_price`    | DECIMAL(10,2) | Product price               |

### Example

```sql
CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(255) NOT NULL,
    product_quantity INT NOT NULL,
    product_price DECIMAL(10,2) NOT NULL
);
```

> **Note:** The current order schema is intentionally simple. A production-ready system should use separate `orders` and `order_items` tables and associate each order with a user.

---

# 📁 Project Structure

```text
ecommerce/
│
├── admin_page.php
├── appliances.php
├── category.php
├── config.php
├── database.php
├── electronics.php
├── fashion.php
├── getcategory.php
├── login_form.php
├── logout.php
├── mobiles.php
├── register_form.php
├── AboutUs.php
│
├── cart.html
├── ordersummary.html
├── slider.html
├── README.md
│
├── css/
│   └── style.css
│
├── style/
│   ├── AboutUs.css
│   ├── appliances.css
│   ├── cart.css
│   ├── category.css
│   ├── electronics.css
│   ├── fashion.css
│   ├── mobiles.css
│   ├── ordersummary.css
│   └── slider.css
│
├── js/
│   ├── appliances.js
│   ├── cart.js
│   ├── cart01.js
│   ├── category.js
│   ├── electronics.js
│   ├── fashion.js
│   ├── main.js
│   └── mobiles.js
│
└── images/
    └── product and website assets
```

---

# ⚙️ Installation

## Prerequisites

Before installing City Mart, make sure you have:

* PHP 7.4 or higher
* MySQL 5.7+ or MariaDB
* Apache or another PHP-compatible web server
* XAMPP, WAMP, or MAMP
* A modern web browser

> **Recommendation:** Use a currently supported PHP version rather than PHP 7.0 for new deployments.

---

## 1. Clone or Download the Project

Clone the repository:

```bash
git clone <repository-url>
```

Or download the project ZIP file and extract it.

---

## 2. Move the Project to the Web Server Directory

### XAMPP

```text
C:\xampp\htdocs\ecommerce
```

### WAMP

```text
C:\wamp64\www\ecommerce
```

### MAMP

```text
/Applications/MAMP/htdocs/ecommerce
```

---

# 🗄️ Database Setup

## 1. Start MySQL

Open your XAMPP/WAMP/MAMP control panel and start:

```text
Apache
MySQL
```

---

## 2. Open phpMyAdmin

Navigate to:

```text
http://localhost/phpmyadmin
```

---

## 3. Create the Database

Run:

```sql
CREATE DATABASE ecommerce;

USE ecommerce;
```

---

## 4. Create the User Table

```sql
CREATE TABLE user_form (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    user_type ENUM('admin', 'user') DEFAULT 'user'
);
```

---

## 5. Create the Orders Table

```sql
CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(255) NOT NULL,
    product_quantity INT NOT NULL,
    product_price DECIMAL(10,2) NOT NULL
);
```

---

## 6. Create an Admin Account

The original project used an MD5 password hash. **MD5 should not be used for production authentication.**

For development/testing with the existing implementation:

```sql
INSERT INTO user_form (
    name,
    email,
    password,
    user_type
)
VALUES (
    'Admin',
    'admin@example.com',
    '21232f297a57a5a743894a0e4a801fc3',
    'admin'
);
```

The corresponding password is:

```text
admin123
```

> **Security Warning:** Replace this authentication system with PHP's `password_hash()` and `password_verify()` before deploying the application publicly.

---

# 🔧 Configuration

Open:

```text
config.php
```

and:

```text
database.php
```

Configure your database credentials.

A typical local configuration is:

```php
$host = "localhost";
$username = "root";
$password = "";
$database = "ecommerce";
```

Your configuration may differ depending on your XAMPP/WAMP/MAMP setup.

> Do not commit real production database credentials to GitHub.

---

# ▶️ Running the Application

After starting Apache and MySQL, open:

```text
http://localhost/ecommerce/
```

The application should load in your browser.

---

# 🔐 Default Login

## Admin

```text
Email: admin@example.com
Password: admin123
```

## User

New users can register through:

```text
register_form.php
```

After registration, users can log in using their registered credentials.

---

# 🔌 API Endpoints

## Get Orders

### Endpoint

```http
GET /getcategory.php
```

### Purpose

Retrieves order information from the database.

### Example Response

```json
{
    "orders": [
        {
            "id": 1,
            "product_name": "iPhone 12",
            "product_quantity": 2,
            "product_price": 98990.00
        }
    ]
}
```

### Example Local URL

```text
http://localhost/ecommerce/getcategory.php
```

> The endpoint should be protected with authentication and authorization if it exposes customer or order information.

---

# 🔄 Application Workflow

```text
                    ┌─────────────────┐
                    │     City Mart   │
                    │   E-Commerce    │
                    └────────┬────────┘
                             │
              ┌──────────────┴──────────────┐
              │                             │
        ┌─────▼─────┐                 ┌─────▼─────┐
        │    User   │                 │   Admin   │
        └─────┬─────┘                 └─────┬─────┘
              │                             │
       ┌──────▼──────┐              ┌───────▼───────┐
       │ Login/Register│            │ Admin Dashboard│
       └──────┬──────┘              └───────┬───────┘
              │                             │
       ┌──────▼──────┐              ┌───────▼────────┐
       │   Browse    │              │ Product Manage │
       │  Products   │              └────────────────┘
       └──────┬──────┘
              │
       ┌──────▼──────┐
       │ Add to Cart │
       └──────┬──────┘
              │
       ┌──────▼──────────┐
       │ Order Summary   │
       └──────┬──────────┘
              │
       ┌──────▼──────┐
       │ Place Order │
       └─────────────┘
```

---

# 🔒 Security Considerations

The current project is suitable for **development and learning purposes**, but several areas should be improved before production deployment.

## 1. Password Hashing

### Current

The project uses:

```text
MD5
```

MD5 is unsuitable for password storage.

### Recommended

Use:

```php
password_hash($password, PASSWORD_DEFAULT);
```

and verify passwords using:

```php
password_verify($password, $hash);
```

---

## 2. SQL Injection

All database queries involving user input should use prepared statements.

### Recommended PDO Pattern

```php
$stmt = $pdo->prepare(
    "SELECT * FROM user_form WHERE email = :email"
);

$stmt->execute([
    ':email' => $email
]);
```

Avoid directly inserting user input into SQL queries.

---

## 3. Cross-Site Scripting — XSS

User-generated data should be escaped before being displayed.

Example:

```php
echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
```

---

## 4. CSRF Protection

Forms that modify data should include CSRF protection.

Recommended implementation:

```text
CSRF token
    ↓
Form submission
    ↓
Token validation
    ↓
Process request
```

---

## 5. Session Security

Authentication sessions should use secure session configuration, including:

* Session regeneration after login
* Secure cookies
* HttpOnly cookies
* SameSite protection
* Proper logout handling
* Session expiration

Example:

```php
session_regenerate_id(true);
```

---

## 6. File Upload Security

If product image uploads are implemented, validate:

* File extension
* MIME type
* File size
* File name
* Upload directory
* Executable file prevention

Never trust the uploaded file name or extension supplied by the user.

---

# ⚠️ Known Limitations

The current implementation has several limitations.

### Authentication

* MD5 password hashing
* Limited authentication security
* CSRF protection is not implemented

### Shopping Cart

Cart information is currently stored on the client side/local storage rather than in the database.

### Payments

No payment gateway is currently integrated.

### Products

The product management system requires further development.

### Orders

The current order schema stores product information directly instead of using normalized order and order-item tables.

### Security

The application requires additional protection against:

* SQL injection
* XSS
* CSRF
* Session attacks
* Unauthorized API access

### Validation

Input validation and sanitization should be improved throughout the application.

---

# 🚀 Future Enhancements

## Database Improvements

* [ ] Products table
* [ ] Categories table
* [ ] Product inventory
* [ ] User profiles
* [ ] Orders and order items
* [ ] Addresses
* [ ] Payments
* [ ] Coupons
* [ ] Product images
* [ ] Product variants

---

## Authentication & Security

* [ ] Replace MD5 with bcrypt/Argon2
* [ ] Implement CSRF protection
* [ ] Use prepared statements everywhere
* [ ] Improve session security
* [ ] Add email verification
* [ ] Add password reset
* [ ] Add rate limiting
* [ ] Implement secure file uploads

---

## Shopping Features

* [ ] Product search
* [ ] Advanced filtering
* [ ] Sorting
* [ ] Wishlist
* [ ] Product reviews
* [ ] Product ratings
* [ ] Product comparison
* [ ] Recently viewed products
* [ ] Order tracking

---

## Payment & Checkout

* [ ] Payment gateway integration
* [ ] Online payment verification
* [ ] Cash on delivery
* [ ] Invoice generation
* [ ] Order confirmation emails
* [ ] Payment history
* [ ] Refund management

---

## Admin Dashboard

* [ ] Product CRUD
* [ ] Category management
* [ ] Inventory management
* [ ] User management
* [ ] Order management
* [ ] Sales reports
* [ ] Revenue analytics
* [ ] Low-stock alerts
* [ ] Bulk product operations

---

## Performance

* [ ] Database query optimization
* [ ] Pagination
* [ ] Image optimization
* [ ] Lazy loading
* [ ] Browser caching
* [ ] Server-side caching
* [ ] CDN integration

---

## UI/UX

* [ ] Dark mode
* [ ] Advanced responsive design
* [ ] Improved checkout experience
* [ ] Product comparison interface
* [ ] Better mobile navigation
* [ ] Loading states
* [ ] Toast notifications
* [ ] Improved accessibility

---

# 🐛 Troubleshooting

## Cannot Connect to Database

Check the following:

1. MySQL is running.
2. Database name is correct.
3. Username and password are correct.
4. `config.php` contains the correct credentials.
5. `database.php` contains the correct credentials.
6. The `ecommerce` database exists.

---

## Login Not Working

Check:

1. The user exists in `user_form`.
2. The email address is correct.
3. The password hash matches the authentication implementation.
4. Sessions are enabled.
5. Browser cookies are enabled.
6. The database connection is working.

---

## Images Not Loading

Verify:

```text
images/
```

contains the required image files.

Also check that image paths are correct.

For example:

```html
<img src="images/product.jpg" alt="Product">
```

---

## 404 Errors

Check:

* Apache is running.
* The project exists inside the web server directory.
* The URL is correct.
* PHP files exist.
* File paths are correct.
* `.htaccess` configuration, if applicable.

Example:

```text
http://localhost/ecommerce/
```

---

## CSS or JavaScript Not Loading

Check the browser Developer Tools:

```text
F12 → Console
F12 → Network
```

Verify that CSS and JavaScript files return:

```text
HTTP 200
```

and that their relative paths are correct.

---

# 🤝 Contributing

Contributions are welcome.

## Contribution Workflow

### 1. Fork the repository

Create your own fork of the project.

### 2. Clone the repository

```bash
git clone <your-fork-url>
```

### 3. Create a feature branch

```bash
git checkout -b feature/your-feature
```

### 4. Make your changes

Implement and test your changes locally.

### 5. Commit your changes

```bash
git add .
git commit -m "Add: your feature"
```

### 6. Push the branch

```bash
git push origin feature/your-feature
```

### 7. Create a Pull Request

Open a Pull Request describing your changes.

---

# 📄 License

This project is open-source and available under the **MIT License**.

If a `LICENSE` file is included in the repository, refer to that file for the complete license terms.

---

# 📞 Support

If you encounter a problem with the project:

1. Check the [Troubleshooting](#-troubleshooting) section.
2. Check the browser console for JavaScript errors.
3. Check the PHP/Apache error logs.
4. Verify the database configuration.
5. Open an issue in the repository with the error details.

---

# 📊 Project Status

| Component               | Status            |
| ----------------------- | ----------------- |
| User Registration       | ✅ Available       |
| User Login              | ✅ Available       |
| User Logout             | ✅ Available       |
| Role-Based Access       | ✅ Available       |
| Product Categories      | ✅ Available       |
| Shopping Cart           | ✅ Available       |
| Order Summary           | ✅ Available       |
| Admin Dashboard         | ✅ Available       |
| Order Management        | ✅ Basic           |
| Product Management      | 🚧 In Progress    |
| Payment Gateway         | ❌ Not Implemented |
| Product Reviews         | ❌ Not Implemented |
| Wishlist                | ❌ Not Implemented |
| Order Tracking          | ❌ Not Implemented |
| Secure Password Hashing | 🚧 Required       |
| CSRF Protection         | 🚧 Required       |
| Production Security     | 🚧 Required       |

---

# 👨‍💻 Development Notes

City Mart is currently a **development-stage e-commerce application** intended for learning, experimentation, and further feature development.

Before deploying the application to a production environment, prioritize:

1. Secure password hashing
2. Prepared SQL statements
3. CSRF protection
4. XSS protection
5. Secure session management
6. Input validation
7. Authentication/authorization for APIs
8. Proper order and payment database design
9. Secure file uploads
10. Production error handling and logging

---

## ⭐ City Mart

A simple and extensible PHP/MySQL e-commerce platform designed to provide a foundation for building a complete online shopping system.
