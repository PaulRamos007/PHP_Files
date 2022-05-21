<?php

echo "<h2>While Loops</h2>";

$month = 1;
$separator = ", ";

while ($month <= 12) {
    echo $month . $separator;
    $month++;
}

echo "<br>";
echo "<h2>Do While Loops</h2>";

$month1 = 11;

do {
    echo $month1 . $separator;
    $month1++;
} while ($month1 <= 14);

echo "<br>";
echo "<h2>For Loops</h2>";

$number = rand(1, 10);

for ($i = 0; $i <= $number; $i++) {
    echo $i . $separator;
}

echo "<br>";
echo "<h2>Foreach with Arrays</h2>";

$names = ["Bonnie ", "Himanshu ", "Chris ", "David "];

echo $names[1];
echo "<br>";

foreach ($names as $name) {
    echo $name . $separator;
}

echo "<br>";
echo "<h2>Foreach with Associative Arrays</h2>";

$newNames = [
    "insITPA" => "Bonnie",
    "insGEXJR" => "Himanshu",
    "insWEB" => "Chris"
];

echo $newNames["insGEXJR"];

echo "<br>";
foreach ($newNames as $key => $value) {
    echo $key . " : " . $value . $separator;
}

echo "<br>";
echo var_dump($newNames);
