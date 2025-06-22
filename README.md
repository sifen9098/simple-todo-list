# 📝 Simple To-Do List Web App (PHP + MySQL)

This is a simple To-Do List web application built using PHP and MySQL. It allows users to create, view, update, complete, and delete tasks. A great starter project for practicing CRUD operations.

## 🚀 Features

- ✅ Add new tasks
- 📝 Edit existing tasks
- ❌ Delete tasks
- ✔️ Mark tasks as completed
- 📋 View all tasks

## 🛠️ Technologies Used

- PHP (Backend)
- MySQL (Database)
- HTML/CSS (Frontend)
- Bootstrap (Optional for styling)
- XAMPP/WAMP (Local server environment)

## ⚙️ Setup Instructions

1. Clone or Download the Project

```
git clone https://github.com/yourusername/todo-app.git
```
Or just download the `.zip` and extract it into your `htdocs` (XAMPP) folder.

2. Create MySQL Database

Open [phpMyAdmin](http://localhost/phpmyadmin/)  
Run the following SQL:

```sql
CREATE DATABASE todo_app;

USE todo_app;

CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    is_done TINYINT(1) DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

3. Configure Database Connection

Edit `/includes/db.php` if your MySQL username/password is different.

4. Run the Project

- Start Apache and MySQL in XAMPP
- Visit: http://localhost/todo-app

## 📁 Project Structure

```
todo-app/
├── index.php
├── add.php
├── edit.php
├── update.php
├── delete.php
├── complete.php
├── /includes/db.php
├── style.css
└── README.md
```

## 📌 Future Improvements

- Add user login system
- Task deadlines and reminders
- Task priority levels
- Responsive mobile UI

## 📬 Contact

Created by sifen
