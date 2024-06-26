# SimpleFrontBackEnd
This GitHub repository contains a basic project showcasing a conference registration system using HTML, JavaScript, PHP, and MySQL
#Features:
Front-End: HTML for structuring the web pages.
Back-End: PHP for server-side scripting.
Database Management: phpMyAdmin for managing the database.
#How to Use:
Clone the repository.
Set up a local server environment (e.g., MAMP).
Write the following SQL query on phpMyAdmin:
CREATE DATABASE conference;
USE conference;
CREATE TABLE attendees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    con_fname VARCHAR(50),
    con_lname VARCHAR(50),
    con_email VARCHAR(100) UNIQUE,
    con_dbirth DATE
);
Run the project on your local server: http://localhost:8888/s9/con_register.html (where s9 is in your htdocs folder in MAMP folder and all files must be stored in s9 folder)

This project demonstrates the fundamental integration of front-end and back-end technologies to create a simple web application.
