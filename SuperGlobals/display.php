<?php

// echo ("<pre>");
// print_r($_GET);
// echo ("</pre>");

$name = htmlspecialchars($_POST['fname']);
$age = htmlspecialchars($_POST['age']);

echo "The name of the user is: " . $name;
echo "<br />";
echo "The age of the user is: " . $age;
echo "<br />";
