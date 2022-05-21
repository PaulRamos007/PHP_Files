<?php

$num = 0;

try {
    if (!$num) {
        throw new Exception("Enter a valid number.");
    }
    $value = 2 / $num;
    echo $value;
} catch (Exception $ex) {
    echo $ex->getMessage();
    echo "<br />";
    echo $ex->getLine();
    echo "<br />";
    echo $ex->getFile();
}
