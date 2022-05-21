<?php

$name = "Paul Ramos";

function myFunction()
{

    $message = "Hello world";

    echo $message;
}

myFunction();
//Local variables cannot be used outside the function

$number = 15;

echo "<br>";

//Global variables are also static variables
function usingGlobalVariable()
{

    global $number;

    $number++;

    echo $number;
}

usingGlobalVariable();

$x = 10;
$y = 12;
$z = 15;

echo "<br>";

function usingGlobals()
{

    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];

    echo $GLOBALS['z'];
}

usingGlobals();

echo "<h3>Using static variables</h3>";

function keepTrack()
{

    static $num1 = 10;

    $num2 = 15;

    $num1++;
    $num2++;

    echo "value of num1 is", "<br>", $num1, "<br>", "value of num2", "<br>", $num2;
}

keepTrack();
echo "<br>";
keepTrack();
echo "<br>";
keepTrack();

echo "<h3>Using Constants</h3>";

define("PI", 3.141592);

printf("The value of PI is %f", PI);

$decimalNumber = 1234567.12345;

$decimal = 3;

echo "<br>";
echo number_format($decimalNumber, $decimal);

$firstname = "Paul";
$dob = 24;

echo "<br>";
echo $firstname . " " . $dob;

echo "<br>";
echo "<h3>Checking variable values</h3>";

$value = 12;

echo isset($value);

$value2;

echo "<br>";
echo empty($value2);

$value3 = 12;

echo "<br>";
echo is_numeric($value3);
