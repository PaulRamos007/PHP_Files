<?php
$pageTitle = "Login";
include "includes/header.php";
include "includes/session.php";
include "includes/functions.php";

if (isset($_SESSION['username'])) {
    echo "You are registered already", $_SESSION['username'], "<a href='page2.php'></a>";
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['Login']) && !empty($_POST['username']) && !empty($_POST['email'])) {
        $uname = htmlentities($_POST['username']);
        $email = htmlentities($_POST['email']);

        $_SESSION['username'] = $uname;
        $_SESSION['email'] = $email;

        echo "Thanks for logging in <br>",
        "Usernanme: $uname <br>",
        "Email: $email <br>",
        "<a href='page2.php'>Go to page 2</a>",
        "<a href='logout.php'>Logout</a>";
    } else {
        echo "Please fill out both the fields <a href='login.php'>Try Again</a>";
    }
} else {
    if (isset($_GET['logout'])) {
        if ($_GET['logout'] == 1) {
            echo "You have been successfully logout";
        }
    }

?>

    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" />
        <label for="email">Email:</label>
        <input type="text" name="email" />
        <button type="submit" name="Login">Login</button>
    </form>

<?php
}
?>

<?php include "includes/footer.php"; ?>