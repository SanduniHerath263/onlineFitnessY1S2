<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "my_database"; // Replace with your desired database name

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Create database (assuming it doesn't exist)
$sql_create_db = "CREATE DATABASE IF NOT EXISTS $dbname";
if (mysqli_query($conn, $sql_create_db)) {
  echo "Database created (or already exists) successfully";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}

// Select the database to use
mysqli_select_db($conn, $dbname);

// SQL to create table
$sql = "CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(255) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);";

if (mysqli_query($conn, $sql)) {
  echo "Table users created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

}
