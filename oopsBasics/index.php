<?php require_once 'Book.php';

//instintiate the class

$lighthouse = new Book("The lighthouse", "Paul Ramos", 10, 0);

// var_dump($lighthouse);

if ($lighthouse->getCopy()) {
    echo "Here is a copy of this book " . $lighthouse->title . "</br>";
} else {
    echo "Sorry no available copy of this book";
}

var_dump($lighthouse);
