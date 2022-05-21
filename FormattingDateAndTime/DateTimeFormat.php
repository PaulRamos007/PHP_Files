<?php

$time = time();

print date("m/d/y", $time); //This will generate data in two digit numeric format
echo "<br>";
print date("D,F jS", $time); // Mon,May 2nd
echo "<br>";
print date("D, F jS Y", $time); // Mon, May 2nd 2022
echo "<br>";
print date("g:i A", $time); // 3:29 PM
echo "<br>";
print date("r", $time); // Mon, 02 May 2022 15:32:01 +0200
echo "<br>";
print date("g:i:s", $time); // 3:32:50
echo "<br>";
print date("g:i:s A D, F jS Y", $time); // 3:34:07 PM Mon, May 2nd 2022