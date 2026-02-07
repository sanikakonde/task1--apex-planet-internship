-- Run this in phpMyAdmin or MySQL
CREATE DATABASE task1_db;
USE task1_db;

CREATE TABLE messages (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100),
  message TEXT
);
