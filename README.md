🧑‍⚖️ Judging System
This is a simple web-based application for managing judges, users, and assigning scores. Judges can log in and assign scores to users between 1 and 100.

DATABASE SCHEMA
CREATE DATABASE judging_system;

USE judging_system;

CREATE TABLE judges (
  judgeId VARCHAR(50) PRIMARY KEY,
  username VARCHAR(100) NOT NULL,
  password VARCHAR(100) NOT NULL
);

CREATE TABLE users (
  userId VARCHAR(50) PRIMARY KEY,
  userName VARCHAR(100) NOT NULL,
  Score INT DEFAULT 0
);

Configuration
<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "judging_system";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
Run the Application
Ensure a local server is running (e.g., XAMPP, MAMP, WAMP).

Open the app in your browser:
http://localhost/judging-system/index.php

🚀 Features to Add (If Given More Time)
✅ Judge login/logout system with session handling.

✅ Score history and audit trail.

✅ Prevent scoring the same user multiple times.

✅ Export user scores to CSV or PDF.

✅Better UI/UX.

✅ Admin dashboard for managing judges and users.

