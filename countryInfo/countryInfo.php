<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country Info</title>
    <style>
        td {
            width: 100px;
        }
    </style>
</head>

<body>

    <?php

    if (isset($_GET["country"])) {

        $country = ["ca" => "Canada", "us" => "United States"];
        $currency = ["ca" => "./images/loonie.jpg", "us" => "./images/usBuck.jpg"];
        $animal = ["ca" => "./images/beaver.jpg", "us" => "./images/bald_eagle.jpg"];
        $id = $_GET["country"];

        echo "<h2>$country[$id]</h2>";
        echo "<h3>Animal</h3><br/>";
        echo "<img src='$animal[$id]'/>";
        echo "<h3>Currency</h3><br/>";
        echo "<img src='$currency[$id]'/>";

        echo "<p><a href='index.php'>< Go back</a></p>";
    }



    ?>


</body>

</html>