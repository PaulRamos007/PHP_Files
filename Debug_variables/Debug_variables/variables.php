
<?php

$name = "Himanshu Devnani";

function myFunction()
{
  $message = "Hello world";

  echo $message;
}

myFunction();
//echo $message; Local Variables cannot be used outside the function


$number = 15;

$number2 = 17;
echo "<br>";
function usingGlobalVariable()
{

  global $number;

  $number++;


  echo $number;
}

usingGlobalVariable();
echo "<br>";
usingGlobalVariable();
echo "<br>";
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


echo "<h3>Using Static varibles</h3>";

function keepTrack()
{

  static $num1 = 10;

  $num2 = 10;

  $num1++;

  $num2++;

  echo "value of num1 is ", $num1, "<br>", "value of num2 is ", $num2;
}

keepTrack();
keepTrack();
keepTrack();

echo "<h1>Using Constants</h1>";

define("PI", 3.141592);
echo "<h2>";
printf("The value of PI is %.3f", PI);

echo "</h2>";
echo "<br>";
$decimalNumber = "12345.12345";

$decimal = "okay";

echo number_format($decimalNumber, $decimal);



echo "<br>";
$firstname = "Himanshu";

$dob = 17;

echo $firstname . " " . $dob;


echo "<br>";

echo "<h1>Checking variable values</h1>";

$value = 12;

echo isset($value12);

echo "<br>";


$value2;

echo empty($value2);

$value3 = 'Himanshu';

echo "<br>";

echo is_numeric($value3);
