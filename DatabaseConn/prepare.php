<?php

include "includes/connection.php";

$sql = "INSERT INTO books (title, description, Price, user_id) VALUES (?,?,?,?)";

//Creating a prepared statement
$stmt = $conn->prepare($sql);

//Bind Parameters to the prepared statement
$stmt->bind_param("ssdi", $title, $description, $price, $user_id);

//Set parameters
$title = "Red Alert";
$description = "A book about Yuri";
$price = 12;
$user_id = 2;

$stmt->execute();

echo "Rows Affected: ", $stmt->affected_rows, "<br>The inserted book id is: ", $stmt->insert_id;

//setting parameters for second row
$title = "Jumanji";
$description = "A book about Game of Jumanji";
$price = 14;
$user_id = 1;

$stmt->execute();

echo "<br>Rows Affected: ", $stmt->affected_rows, "<br>The inserted book id is: ", $stmt->insert_id;

$stmt->close();
