<?php session_start();

unset($_SESSION['username']);

if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), "", time() - 3600, "/");
}

echo "session deleted successfully";
