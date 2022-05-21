<?php

$hostname = "localhost:3308";
$username = "Arjean";
$password = "1234";
$dbname = "healthwise";

$conn = new mysqli($hostname, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error in connection " . $conn->connect_error);
}
