<?php include 'includes/connection.php';

require_once 'BookDb.php';

//Using the method to get books
// $books = BookDb::getAll($conn);

// echo "<pre>";
// print_r($books);
// echo "</pre>";

//Using the method to delete a book
// $books = BookDb::delete($conn, 4);
// echo $books;

//Using method to insert a new book
// $books = BookDb::insert($conn, "The last airbender", "Book about the avatar", 23, 2);
// echo "Book is inserted successfully with id $books";

//Using the mtethod to update a book
$books = BookDb::update($conn, "The last airbender", "Book about Aang", 23, 2, 10);
echo "Book is updated successfully $books";
