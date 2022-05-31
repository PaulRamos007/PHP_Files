<?php require_once 'Book.php';

//Instantiante using magic method
$lighthouse = new Book("The lighthouse", 10, "David", 7);

if ($lighthouse->getCopy()) {
    echo "Here is a copy of this book " . $lighthouse->title . "</br>";
} else {
    echo "Sorry no available copy of this book";
}

var_dump($lighthouse);
