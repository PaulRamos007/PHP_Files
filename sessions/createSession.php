<?php session_start();

if (isset($_SESSION['username'])) {
    $_SESSION['username'] = "Paul";
    echo "Session created successfully";
} else {
    echo "You already created a session";
}
