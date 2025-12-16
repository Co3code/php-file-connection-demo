# PHP File Connection Demo

This repository is a beginner-friendly PHP project that demonstrates how
different PHP files are connected using `include`, `require`, and
`require_once`, with a simple database connection.

## 📌 What You Will Learn
- How PHP files communicate with each other
- Proper file separation (config, database, layout, logic)
- How to connect PHP to MySQL
- When to use `include` vs `require_once`
- How real PHP projects are structured

## 📁 Project Structure

php-file-connection-demo/
│
├── config.php        # Database configuration (constants)
├── db.php            # Database connection logic
├── functions.php     # Reusable helper functions
├── header.php        # Common page header
├── footer.php        # Common page footer
├── index.php         # Home page
├── login.php         # Sample form with database insert
├── database.sql      # Database structure
└── README.md         # Documentation

## ⚙️ How the Files Connect

1. `config.php`
   - Stores database credentials using constants

2. `db.php`
   - Uses `config.php` to create a database connection

3. `functions.php`
   - Contains reusable functions used by multiple pages

4. `header.php` and `footer.php`
   - Shared layout included in pages

5. `index.php` and `login.php`
   - Main pages that include the other files

## 🗄 Database Setup

1. Create the database:
```sql
CREATE DATABASE test_db;
