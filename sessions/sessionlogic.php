<?php session_start();

if (isset($_SESSION['number'])) {
    $_SESSION['number']++;
} else {
    $_SESSION['number'] = 1;
}

print_r($_SESSION['number']);
