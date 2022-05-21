<?php
include "includes/connection.php";

$sql = "UPDATE books SET title=?, description=? WHERE book_id=?";
//creating prepared statement

$stmt = $conn->prepare($sql);

// Bind the parameters to the prepared statement

$stmt->bind_param("ssi", $title, $description, $book_id);

//set parameters

$title = "Warcraft";
$description = "A book that covers details about orcs";
$book_id = 6;

$stmt->execute();

echo "Rows effected : ", $stmt->affected_rows, "<br>The updated book id is ", $book_id;


//setting parameters for second row

$title = "Arcane";
$description = "This is random description of league of legend";
$book_id = 7;
$stmt->execute();
echo "<br>Rows effected : ", $stmt->affected_rows, "<br>The updated book id is ", $book_id;

$stmt->close();
