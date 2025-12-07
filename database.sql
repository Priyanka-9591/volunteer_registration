-- Database setup for Volunteer Registration
-- Run this SQL in your PHPMyAdmin/MySQL interface

CREATE DATABASE IF NOT EXISTS volunteer_db;
USE volunteer_db;

CREATE TABLE IF NOT EXISTS volunteers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    skills TEXT,
    availability VARCHAR(50),
    file_path VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
