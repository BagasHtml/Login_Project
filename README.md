# Simple PHP Login & Register System

A very simple PHP project that demonstrates how to create a **login** and **register** system using **PHP + MySQL (MariaDB)**.

---

## 🚀 Features
- User registration (username & password)
- User login validation
- Redirect to a main page after successful login
- Basic database connection using `mysqli`

---

## 📂 Project Structure
```

Login_Projek/
│
├── connect.php        # Database connection
├── index.php          # Login form
├── login.php          # Login process
├── utama.php          # Main page after login
├── register_form.php  # Registration form
└── register.php       # Registration process

````

---

## 🛠️ Requirements
- [XAMPP / LAMPP](https://www.apachefriends.org/) (or any PHP server)
- PHP >= 7.4
- MariaDB / MySQL

---

## 💾 Database Setup
1. Open **phpMyAdmin** or MySQL terminal.  
2. Create a new database:
   ```sql
   CREATE DATABASE form_login;
````

3. Create the `register` table:

   ```sql
   CREATE TABLE register (
       id INT AUTO_INCREMENT PRIMARY KEY,
       username VARCHAR(30) NOT NULL,
       password VARCHAR(30) NOT NULL
   );
   ```

---

## ▶️ How to Run

1. Clone this repository into your `htdocs` (XAMPP) or web root folder:

   ```bash
   git clone https://github.com/yourusername/Login_Projek.git
   ```
2. Start Apache and MySQL from XAMPP.
3. Open your browser and go to:

   ```
   http://localhost/Login_Projek/index.php
   ```
4. Try to register a new account, then login.
---

## ⚠️ Notes

* This project is **for learning purposes only**.
* Passwords are stored in plain text → not secure! (You should use `password_hash` in real projects).
* No session handling yet → anyone can access `utama.php` directly.
  (You can improve it with PHP `session_start()`).

---
