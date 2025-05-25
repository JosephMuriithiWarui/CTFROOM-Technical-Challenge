<!-- DATABASE -->
-- Create the database
CREATE DATABASE judge;

-- Select the database to use
USE judge;

-- Create the judges table
CREATE TABLE judges ( 
    judgeId VARCHAR(50) PRIMARY KEY, 
    username VARCHAR(100) NOT NULL, 
    password VARCHAR(100) NOT NULL );

CREATE TABLE users ( 
    userId VARCHAR(50) PRIMARY KEY, 
    userName VARCHAR(100) NOT NULL, 
    Score INT DEFAULT 0 );
