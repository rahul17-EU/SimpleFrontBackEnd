# SimpleFrontBackEnd

This GitHub repository contains a basic project showcasing a conference registration system using HTML, JavaScript, PHP, and MySQL.

## Features:

- **Front-End**: HTML for structuring the web pages.
- **Back-End**: PHP for server-side scripting.
- **Database Management**: phpMyAdmin for managing the database.

## How to Use:

1. Clone the repository.

2. Set up a local server environment (e.g., MAMP).

3. Write the following SQL query in phpMyAdmin:

    ```sql
    CREATE DATABASE conference;
    USE conference;
    CREATE TABLE attendees (
        id INT AUTO_INCREMENT PRIMARY KEY,
        con_fname VARCHAR(50),
        con_lname VARCHAR(50),
        con_email VARCHAR(100) UNIQUE,
        con_dbirth DATE
    );
    ```

4. Run the project on your local server: 

    ```
    http://localhost:8888/s9/con_register.html
    ```
    (Ensure the `s9` folder is in your `htdocs` folder within the MAMP directory and all files are stored in the `s9` folder.)

This project demonstrates the fundamental integration of front-end and back-end technologies to create a simple web application.

