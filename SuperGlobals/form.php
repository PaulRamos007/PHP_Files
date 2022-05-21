<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
</head>

<body>
    <form action="form.php" method="post">
        Username: <input type="text" name="fname">

        Age: <input type="text" name="age">

        <input type="submit" name="save">

        <?php

        if (isset($_POST['save'])) {
            $name = htmlspecialchars($_POST['fname']);
            $age = htmlspecialchars($_POST['age']);

            echo "<br />";
            echo "The name of the user is: " . $name;
            echo "<br />";
            echo "The age of the user is: " . $age;
            echo "<br />";
        };


        ?>
    </form>
</body>

</html>