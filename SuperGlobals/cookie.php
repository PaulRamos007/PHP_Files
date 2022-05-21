<?php

$cookie_name = "country";

$cookie_value = "Canada";

$time = time() + (5 * 24 * 60 * 60);

setcookie($cookie_name, $cookie_value, $time);

echo $_COOKIE[$cookie_name];
