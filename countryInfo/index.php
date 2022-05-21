<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country Demo</title>
    <style>
        td {
            width: 100px;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <td>Canada</td>
            <td>
                <?php
                echo '<a href="countryinfo.php?country=ca"><img src="./images/en-CA.jpg"/></a>';
                ?>
            </td>
        </tr>
        <tr>
            <td>USA</td>
            <td>
                <?php
                echo '<a href="countryinfo.php?country=us"><img src="./images/en-US.jpg"/></a>';
                ?>
            </td>
        </tr>
    </table>

</body>

</html>