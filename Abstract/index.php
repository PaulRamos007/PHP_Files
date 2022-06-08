<?php
require_once 'Bird.php';
require_once 'Dog.php';

//Instantiate the class and methods
$sparrow = new Bird();
$pug = new Dog();

$sparrow->communicate();

echo "</br>";

$sparrow->move();

echo "</br>";

$pug->communicate();

echo "</br>";

$pug->move();
