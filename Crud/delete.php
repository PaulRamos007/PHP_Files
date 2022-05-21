<?php
include "includes/connection.php";

$sql = "DELETE from books WHERE book_id=?";
//creating prepared statement

$stmt = $conn->prepare($sql);

// Bind the parameters to the prepared statement

$stmt->bind_param("i", $book_id);

//set parameters

$book_id = 6;

$stmt->execute();

echo "Rows effected : ", $stmt->affected_rows, "<br>The deleted book id is ", $book_id;


//setting parameters for second row

$book_id = 7;
$stmt->execute();
echo "<br>Rows effected : ", $stmt->affected_rows, "<br>The deleted book id is ", $book_id;

$stmt->close();
