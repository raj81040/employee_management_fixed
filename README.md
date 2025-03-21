Employee Management System (PHP & MySQL)
This is a simple Employee Management System built using PHP, MySQL, and Bootstrap. It allows admins to add, update, delete, and search employees efficiently.

Features:
✅ Employee Registration & Login (with password hashing)
✅ Add, Update, Delete Employees
✅ Employee Search Functionality
✅ Secure Authentication System (PHP Sessions)
✅ Bootstrap-based Responsive UI

Tech Stack:
Frontend: HTML, CSS, Bootstrap
Backend: PHP, MySQL
Database: MySQL (InnoDB)
Setup Instructions:
1️⃣ Clone the repository:
https://github.com/raj81040/employee_management_fixed.git
2️⃣ Import employee_db.sql into MySQL
3️⃣ Update db.php with your database credentials
4️⃣ Start the server (XAMPP / LAMP / WAMP)
5️⃣ Open http://localhost/employee-management in the browser

Create Database:CREATE DATABASE employee_db;
USE employee_db;
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);
CREATE TABLE employees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    department VARCHAR(100),
    position VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
<?php
$servername = "localhost";
$username = "root"; // Change if necessary
$password = ""; // Change if necessary
$dbname = "employee_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
