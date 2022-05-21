
<?php

$movie = 99;

echo "<h2>While loop</h2>";
$seperator = ", ";
$month = 1;

while ($month <= 12) {
    echo $month . $seperator;
    $month++;
}

echo "<h2>do While loop</h2>";
$month1 = 14;

do {
    echo $month1 . $seperator;
    $month1++;
} while ($month1 <= 12);


echo "<h2>For loop</h2>";

$number = rand(1, 10);

for ($i = 0; $i <= $number; $i++) {
    echo $i . $seperator;
}

echo "<h2>Foreach with Array</h2>";

$names = ["Bonnie " / "Himanshu ", "Chris ", "David "];

echo $names[24];
echo "<br>";
foreach ($names as $name) {
    echo $name . $seperator;
}

echo "<h2>Foreach with Associative Array</h2>";

$newNames = [
    "insITPA" => "Bonnie",
    "insGEXJR" => "Himanshu",
    "insWEB" => "Chris",
];

echo $newNames["insGEXJR"];
echo "<br>";
foreach ($newNames as $key => $value) {
    echo $key . " : " . $value . $seperator;
}
echo "<br>";
var_dump($oldNames);

?>