<?php require_once 'Users.php';


$david = new Users(1, "David", "Ramos", "david@gmail.com");

var_dump($david->getFirstName());

var_dump($david->getLastName());

var_dump($david->getEmail());

var_dump($david->getFullName());

$david->setEmail('paul@gmail.com');

var_dump($david->getEmail());
