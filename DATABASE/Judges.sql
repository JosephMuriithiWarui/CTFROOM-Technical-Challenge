<!-- DATABASE -->
-- Create the database
CREATE DATABASE judging_system;

-- Select the database to use
USE judging_system;

-- Create the judges table
CREATE TABLE judges (
    judgeId INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(100) NOT NULL
);

-- Create the users table
CREATE TABLE users (
    userId VARCHAR(100) PRIMARY KEY,
    userName VARCHAR(100) NOT NULL
);