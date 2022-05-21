<?php
//four steps to closing a session (logging out)
#1 - Find the session
include "includes/session.php";
include "includes/functions.php";

#2 - Unset all the session variables
$_SESSION = array();

#3 - Destroy the session cookie
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), "", time() - 3600, "/");
}

#4 - Destroy the session
redirectTo("login.php?logout=1");
