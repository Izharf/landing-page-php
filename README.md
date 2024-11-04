*Landing Page Project:
This is a landing page project built with HTML, CSS, JavaScript, PHP, and MySQL. It includes a header, footer, hero section, contact form, and saves form data to a database.

*Features:
Contact Form: Users can fill out a contact form with their name, email, reason for contact, preferred contact method, and message.
Database Storage: Form data is saved to a MySQL database.
Additional User Info: The system records the user's IP address, browser details, and if they opted for the newsletter.
Requirements
XAMPP (or another local server with PHP and MySQL)
PHP 7.0+
MySQL database
Setup Instructions
Clone this repository to your htdocs folder in XAMPP.


*Start Apache and MySQL in XAMPP.

*In phpMyAdmin, create a database named landing_page.

*Import the SQL commands from database.sql (if included) to set up the contacts table. Otherwise, use these SQL commands:


CREATE DATABASE landing_page;

USE landing_page;

CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    contact_reason VARCHAR(50),
    preferred_contact_method VARCHAR(10),
    message TEXT NOT NULL,
    ip_address VARCHAR(45),
    user_agent VARCHAR(255),
    subscribe_newsletter TINYINT(1),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


*Open the landing page at http://localhost/landing_page_project/ to see the form and submit entries.

*Check the database to view saved form submissions.

License:
This project is open-source and free to use.


