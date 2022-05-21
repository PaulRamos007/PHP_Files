<?php
include "includes/connection.php";

$sql = "INSERT INTO books (title, description, Price, user_id) VALUES (?,?,?,?)";
//creating prepared statement

$stmt = $conn->prepare($sql);

// Bind the parameters to the prepared statement

$stmt->bind_param("ssdi", $title, $description, $price, $user_id);

//set parameters

$title = "Red Alert 2";
$description = "A book that covers details about world war 2";
$price = 13;
$user_id = 1;

$stmt->execute();

echo "Rows effected : ", $stmt->affected_rows, "The inserted book id is ", $stmt->insert_id;


//setting parameters for second row

$title = "Jumanji";
$description = "This is random description of jumanji";
$price = 3;
$user_id = 2;
$stmt->execute();
echo "Rows effected : ", $stmt->affected_rows, "the inserted book id is ", $stmt->insert_id;

$stmt->close();
