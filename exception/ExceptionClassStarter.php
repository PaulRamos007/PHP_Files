<?php

//create a function named multipication($num1)
//This function should return multipication of two numbers.
//call the multipication function and pass "Hii" as an argument. multipication("Hii");
// Use try-catch to handle this error. if a character is passed as a parameter than display the output
// "Please Provide a number "

function multiplication($num1, $num2)
{
    try {
        if (!is_numeric($num1) || !is_numeric($num2)) {
            throw new Exception("Please enter a valid number.");
        }
        $value = $num1 * $num2;
        echo $value;
    } catch (Exception $ex) {
        echo $ex->getMessage();
        echo "<br />";
        echo $ex->getLine();
        echo "<br />";
        echo $ex->getFile();
    }
}

multiplication(3, 5);
echo "<br />";
multiplication("hii", 2);
