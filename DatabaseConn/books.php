<?php

include("includes/connection.php");
include 'includes/header.php';

// Query to return results
$sql = "SELECT * from books";
$result = $conn->query($sql);

// Get total record count
$totalCount = $result->num_rows;
$result->close();
echo $totalCount;
$perpage = 3;

if (isset($_GET['page'])) {
    $currentPage = $_GET['page'];
    $offset = $perpage * ($currentPage - 1);
} else {
    $currentPage = 2;
    $offset = 0;
}

// Query to returnasubset of records
$sql = "SELECT * FROM books LIMIT $perpage OFFSET $offset";

// Fetch the results into bound variables
if ($stmt = $conn->prepare($sql)) {
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        $id = $row['book_id'];
        $title = $row['title'];
        $description = $row['description'];

        echo "<h2><a href='bookdetails.php?book_id=$id'>$title </a></h2>";
        echo $description, "<br><hr>";
    }

    $count = 1;
    for ($i = 0; $i < $totalCount; $i += $perpage) {
        if ($count == $currentPage) {
            echo "<strong>$count</strong>";
        } else {
            echo "<a href='books.php?page=$count'>$count</a>&nbsp;";
        }
        $count++;
    }
    $stmt->close();
    $conn->close();
} else {
    printf("Prepared Statement Error:", $conn->error);
}


require 'includes/footer.php';
