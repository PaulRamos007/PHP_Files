<?php
include "includes/session.php";
include "includes/functions.php";
$pageTitle = "Sensitive Data";
include "includes/header.php";
?>

<?php

if (isset($_SESSION['username'])) {
    echo "Hi there ", $_SESSION['username'], "<a href='logout.php'>Logout</a>";
} else {
    confirmLoggedIn();
}

?>
<h3 class="sensitive">This page contains sensitive data and should only be seen by logged in users</h3>
<?php include "includes/footer.php"; ?>