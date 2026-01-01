# 🎓 Student Attendance Management System

A **web-based Student Attendance Management System** developed using **HTML, CSS, Bootstrap, PHP, and MySQL**.  
This project helps manage student records and attendance digitally with a simple, clean, and secure interface.

---

## 📌 Project Overview

This system is designed to simplify the attendance process in colleges or schools.  
It provides login authentication, student management, attendance marking, and attendance viewing features through a centralized dashboard.

The project runs locally using **XAMPP** and stores data in a **MySQL database**.

---

## 🚀 Features

- 🔐 Admin Login System
- 👨‍🎓 Add New Students
- 📋 View Student List
- 📝 Mark Attendance
- 📅 View Attendance (Date-wise)
- 📊 Dashboard for Navigation
- 🚪 Logout Functionality
- 🖥️ Clean UI with Header & Footer Layout

---

## 🛠️ Technologies Used

### Frontend
- HTML5  
- CSS3  
- Bootstrap  

### Backend
- PHP  

### Database
- MySQL  

---

## 🗂️ Project Structure

attendance_project/
│
├── add_student.php # Add new student details
├── config.php # Database connection file
├── dashboard.php # Main dashboard after login
├── footer.php # Footer layout
├── header.php # Header & navigation bar
├── index.php # Entry point / redirect
├── login.php # Login page
├── logout.php # Logout and session destroy
├── mark_attendance.php # Mark student attendance
├── view_attendance.php # View attendance records
├── view_students.php # View all students
└── README.md # Project documentation



---

## ⚙️ Installation & Setup

### 1️⃣ Install XAMPP
Download and install **XAMPP** and start:
- Apache
- MySQL

---

### 2️⃣ Move Project Folder
Copy the project folder to:
C:\xampp\htdocs\attendance_project


---

### 3️⃣ Create Database
1. Open **phpMyAdmin**
2. Create a database (example):
attendance_db


3. Create required tables for:
- students
- attendance
- admin (if applicable)

---

### 4️⃣ Configure Database Connection
Edit `config.php`:
```php
$host = "localhost";
$user = "root";
$password = "";
$database = "attendance_db";
5️⃣ Run the Project
Open your browser and visit:


http://localhost/attendance_project
🔑 Login Flow
User opens login.php

After successful login → redirected to dashboard.php

Dashboard allows:

Add Student

View Students

Mark Attendance

View Attendance

Logout safely ends the session

🎯 Project Objectives
Digitize attendance management

Reduce manual errors

Learn PHP-MySQL integration

Understand session handling

Practice CRUD operations

📚 Use Case
College Mini Project

PHP & MySQL Practice Project

Beginner Full-Stack Web Application

Academic Submission

🔮 Future Enhancements
Attendance percentage calculation

Teacher & Admin roles

Export attendance (PDF / Excel)

Improved dashboard UI

Password encryption & validation

👨‍💻 Author
D.R.Patel
Developed as a college project using PHP & MySQL.

📜 License
This project is for educational purposes only.
Free to use, modify, and improve.
