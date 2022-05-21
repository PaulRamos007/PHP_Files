<?php

$name = ["Paul", "John", "Bill"];

if (isset($_POST['fname']) && $_POST['password']) {
    $saveuser = htmlspecialchars($_POST['fname']);
    $savepass = htmlspecialchars($_POST['password']);

    if (!in_array("$saveuser", $name)) {
        array_push($name, "$saveuser");
        foreach ($name as $names) {
            echo "$names\n" . "<br>";
        }
    } else {
        echo "The usename already exists. Please use a different username.";
    }
}
