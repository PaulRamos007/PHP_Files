<?php session_start();

function confirmLoggedIn()
{
    if (!isset($_SESSION['usernames'])) {
        redirectTo('login.php');
    }
}
