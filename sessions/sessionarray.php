<?php session_start();

$names = ["Paul", "Elisha", "Abigail"];

$_SESSION['username'] = $names;

print_r($_SESSION['username']);
