<?php
$hostname = "localhost:3308";
$username = "root";
$password = "Xiumin0514!";
$dbName = "usersdb";


// Create connection
$conn = new mysqli($hostname, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}