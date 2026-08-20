# City Mart - E-Commerce Platform

## Project Overview

City Mart is a fully responsive e-commerce web application built with PHP, MySQL, HTML, CSS, and JavaScript. The platform provides a seamless shopping experience with user authentication, product browsing, cart management, and order processing capabilities.

## Features

### User Features

- **User Authentication**: Registration and login system with role-based access (Admin/User)
- **Product Categories**: Browse products across multiple categories
  - Mobiles
  - Electronics
  - Appliances
  - Fashion
- **Shopping Cart**: Add/remove items, update quantities, and view total
- **Responsive Design**: Mobile-friendly interface with hamburger menu
- **About Us**: Information about the company and its values

### Admin Features

- **Admin Dashboard**: Separate admin page with management capabilities
- **Order Management**: View and process customer orders
- **Product Management**: Add, update, and remove products

## 🔄 Application Workflow

flowchart TD
A["City Mart<br/>E-Commerce Platform"]

    A --> U["User"]
    A --> AD["Admin"]

    %% User Workflow
    U --> U1["Login / Register"]
    U1 --> U2["Browse Products"]
    U2 --> U3["Select Product"]
    U3 --> U4["Add to Cart"]
    U4 --> U5["Update / Remove Items"]
    U5 --> U6["View Cart"]
    U6 --> U7["Order Summary"]
    U7 --> U8["Place Order"]
    U8 --> U9["Order Confirmation"]

    %% Admin Workflow
    AD --> AD1["Admin Login"]
    AD1 --> AD2["Admin Dashboard"]
    AD2 --> AD3["Product Management"]
    AD2 --> AD4["Order Management"]
    AD2 --> AD5["User Management"]

    AD3 --> AD31["Add / Update / Remove Products"]
    AD4 --> AD41["View / Process Orders"]
    AD5 --> AD51["Manage Users"]

    %% Order Connection
    U8 -. "Order Created" .-> AD4
    AD41 -. "Order Status" .-> U9

## Technical Stack

### Backend

- **PHP**: Server-side scripting language
- **MySQL**: Database management system
- **PDO/MySQLi**: Database connection and operations

### Frontend

- **HTML5**: Structure and content
- **CSS3**: Styling and responsive design
- **JavaScript**: Client-side interactivity
- **AJAX**: Asynchronous data loading

### External Libraries

- **Boxicons**: Icon library
- **Ionicons**: Icon library
- **Font Awesome**: Icon library
- **ScrollReveal**: Animation effects
- **Google Fonts**: Custom typography (Poppins)

## Database Structure

The application uses a database named `ecommerce` with the following key tables:

### User Table (`user_form`)

| Column    | Type    | Description                 |
| --------- | ------- | --------------------------- |
| id        | INT     | Primary key, auto increment |
| name      | VARCHAR | User's full name            |
| email     | VARCHAR | User's email address        |
| password  | VARCHAR | Hashed password (MD5)       |
| user_type | ENUM    | 'admin' or 'user'           |

### Orders Table (`orders`)

| Column           | Type    | Description                 |
| ---------------- | ------- | --------------------------- |
| id               | INT     | Primary key, auto increment |
| product_name     | VARCHAR | Name of the product         |
| product_quantity | INT     | Quantity ordered            |
| product_price    | DECIMAL | Price of the product        |

## File Structure

```
ecommerce/
├── admin_page.php        # Admin dashboard
├── appliances.php        # Appliances category page
├── category.php          # Main category page with slider
├── config.php            # Database configuration
├── database.php          # PDO database connection
├── electronics.php       # Electronics category page
├── fashion.php           # Fashion category page
├── getcategory.php       # API endpoint for orders
├── login_form.php        # User login page
├── logout.php            # User logout functionality
├── mobiles.php           # Mobiles category page
├── register_form.php     # User registration page
├── AboutUs.php           # About Us page
├── cart.html             # Shopping cart page
├── ordersummary.html     # Order summary page
├── slider.html           # Image slider demo
├── README.md             # Project documentation
├── css/                  # CSS files
│   └── style.css         # Global styles
├── style/                # Page-specific styles
│   ├── AboutUs.css
│   ├── appliances.css
│   ├── cart.css
│   ├── category.css
│   ├── electronics.css
│   ├── fashion.css
│   ├── mobiles.css
│   ├── ordersummary.css
│   └── slider.css
├── js/                   # JavaScript files
│   ├── appliances.js
│   ├── cart.js
│   ├── cart01.js
│   ├── category.js
│   ├── electronics.js
│   ├── fashion.js
│   ├── main.js
│   └── mobiles.js
└── images/               # Product and asset images
```

## Installation Guide

### Prerequisites

- XAMPP/WAMP/MAMP installed (or any PHP-enabled server)
- PHP 7.0 or higher
- MySQL 5.7 or higher

### Setup Steps

1. **Clone or Download the Project**

   ```bash
   git clone [repository-url]
   ```

2. **Move to Web Server Directory**
   - **XAMPP**: `C:\xampp\htdocs\ecommerce`
   - **WAMP**: `C:\wamp64\www\ecommerce`
   - **MAMP**: `/Applications/MAMP/htdocs/ecommerce`

3. **Create Database**

   Open phpMyAdmin or MySQL command line and create a new database named `ecommerce`:

   ```sql
   CREATE DATABASE ecommerce;
   ```

4. **Import Database Tables**

   ```sql
   -- User table
   CREATE TABLE user_form (
       id INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(255) NOT NULL,
       email VARCHAR(255) NOT NULL UNIQUE,
       password VARCHAR(255) NOT NULL,
       user_type ENUM('admin', 'user') DEFAULT 'user'
   );

   -- Orders table
   CREATE TABLE orders (
       id INT AUTO_INCREMENT PRIMARY KEY,
       product_name VARCHAR(255) NOT NULL,
       product_quantity INT NOT NULL,
       product_price DECIMAL(10,2) NOT NULL
   );

   -- Default admin user (password: admin123)
   INSERT INTO user_form (name, email, password, user_type)
   VALUES ('Admin', 'admin@example.com', '21232f297a57a5a743894a0e4a801fc3', 'admin');
   ```

5. **Configure Database Connection**

   Update `config.php` and `database.php` with your database credentials.

6. **Start Server**
   - **XAMPP**: Start Apache and MySQL services
   - **WAMP**: Start the services
   - **MAMP**: Start the servers

7. **Access the Application**

   Open your browser and navigate to:

   ```
   http://localhost/ecommerce/
   ```

## Default Login Credentials

### Admin Access

- **Email**: `admin@example.com`
- **Password**: `admin123`

### User Access

Register a new account through the registration page.

## API Endpoints

### GET /getcategory.php

Fetches all orders from the database.

**Response Format:**

```json
{
  "orders": [
    {
      "id": 1,
      "product_name": "iPhone 12",
      "product_quantity": 2,
      "product_price": 98990.0
    }
  ]
}
```

## Key Features Breakdown

### 1. User Authentication

- Secure registration with password hashing (MD5)
- Role-based access control (Admin/User)
- Session management
- Login/logout functionality

### 2. Product Browsing

- Category-based navigation
- Product listings with images and prices
- Responsive grid layout
- Scroll reveal animations

### 3. Shopping Cart

- Add products to cart
- Update quantities
- Remove items
- Real-time total calculation
- Persistent cart data

### 4. Admin Dashboard

- Order management
- User management
- Product management

### 5. Responsive Design

- Mobile-first approach
- Hamburger menu for mobile devices
- Flexible grid layouts
- Touch-friendly interactions

## Known Issues & Limitations

- **Authentication**: Passwords are hashed using MD5 (not recommended for production)
- **Cart Persistence**: Cart data is not stored in database (only uses local storage)
- **Payment Integration**: No payment gateway integrated
- **Product Management**: No admin panel for adding/editing products
- **Security**: SQL injection vulnerability in `config.php` (should use prepared statements)
- **File Upload**: No file upload functionality for product images

## Future Enhancements

### Database Schema Improvements

- Add product categories table
- Implement product inventory system
- Add user profiles table

### Security Enhancements

- Replace MD5 with bcrypt or Argon2
- Implement CSRF protection
- Add input validation and sanitization
- Implement prepared statements for all queries

### Features to Add

- Product search functionality
- Product reviews and ratings
- Wishlist feature
- Order tracking
- Email notifications
- Payment gateway integration
- Admin dashboard for product management
- Bulk operations

### Performance Improvements

- Implement caching
- Optimize database queries
- Add pagination for products
- Lazy loading for images

### UI/UX Improvements

- Dark mode support
- Advanced filtering and sorting
- Product comparison
- Checkout flow optimization

## Security Considerations

> **IMPORTANT**: This project has several security vulnerabilities that should be addressed before production deployment:

- **SQL Injection**: The `config.php` file uses `mysqli_connect()` without prepared statements
- **Weak Password Hashing**: MD5 is used for password hashing
- **XSS Vulnerabilities**: Input is not sanitized properly
- **Session Security**: Session management could be improved
- **File Inclusion**: Potential for remote file inclusion

## Troubleshooting

### Common Issues and Solutions

| Issue                      | Solution                                                                                             |
| -------------------------- | ---------------------------------------------------------------------------------------------------- |
| Cannot connect to database | Verify MySQL service is running; check credentials in `config.php`; ensure database exists           |
| Login not working          | Check if user exists in database; verify password hash matches; clear browser cookies                |
| Images not loading         | Check image paths in PHP files; verify images exist in the correct directory; check file permissions |
| 404 errors                 | Verify file paths; check web server configuration; ensure `.htaccess` is properly configured         |

## Contributing

1. Fork the repository
2. Create a feature branch
3. Commit your changes
4. Push to the branch
5. Create a Pull Request

## License

This project is open-source and available under the [MIT License](LICENSE).

## Support

For support, please open an issue in the repository or contact the development team.

---
