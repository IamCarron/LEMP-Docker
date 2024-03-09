-- Create the database
CREATE DATABASE IF NOT EXISTS login;

-- Select the database
USE login;

-- Create users table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert an example user
INSERT INTO users (username, password, email) VALUES ('admin', 'abc123', 'admin@lemp.com');

-- Grant privileges to the user on the database
GRANT SELECT, INSERT, UPDATE, DELETE ON login.* TO 'root'@'mysql' IDENTIFIED BY 'abc123.';

-- Refresh privileges
FLUSH PRIVILEGES;
