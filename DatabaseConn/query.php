<?php

include("includes/connection.php");

$sql = "SELECT * FROM menuitem";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row['itemCategoryID'] . " " . $row['description'] . " " . $row['price'] . "<br/>";
    }
} else {
    echo "0 rows found";
}

$result->close();
$conn->close();
