<?php

$num1 = 10;

if (empty($num1)) {
    echo "num1 is empty";
} else {
    echo "num1 is not empty";
}

$num2 = pow(3, 7);

echo "<br>";
if (is_numeric($num2)) {
    echo "num2 is a number";
}

echo "<br>";
if ($num2 <= 500) {
    echo "num2 is lesser than 500";
} else {
    echo "num2 is greater than 500";
}

$hour = 11;

echo "<br>";
if($hour < 12){
    echo "Good morning";
}elseif ($hour < 18){
    echo " Good Afternoon";
}elseif ($hour < 22){
    echo "Good evening";
}else{
    echo "Good night";
}

$day = "Monday";

echo "<br>";
switch($day){
    case "Monday":
        echo "Monday is virtual";
        break;
    case "Tuesday":
        echo "Tuesday is not virtual";
        break;
    case "Wednesday":
        echo "Wednesday is virtual";
        break;
    case "Thursday":
        echo "Thursday is not virtual";
        break;
    default:
        echo "Hurray no classes";
        break;
}