<?php

require 'includes/connection.php';

if (isset($_GET['book_id']) && is_numeric($_GET['book_id'])) {

    $sql = "SELECT * FROM books WHERE book_id = " . $_GET['book_id'];

    $result = $conn->query($sql);

    if ($result === false) {
        echo $conn->error;
    } else {
        $books = $result->fetch_assoc();
    }
    if (!empty($books)) {
        $id = $books['book_id'];
        $title = $books['title'];
        $description = $books['description'];
        $price = $books['Price'];
        $userid = $books['user_id'];
    } else {
        echo "No book found";
    }
} else {
    echo "Provide a book_id, No book found";
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['Price'];
    $userid = $_POST['user_id'];


    $sql = "UPDATE books SET title=?, description=?, Price=?, user_id=? WHERE book_id=?";

    $stmt = $conn->prepare($sql);

    if ($stmt == false) {
        echo mysqli_error($conn);
    } else {
        $stmt->bind_param("ssdii", $title, $description, $price, $userid, $id);
        if ($stmt->execute()) {
            echo "Updated record with ID: : $id";
        } else {
            echo $stmt->error;
        }
    }
}
?>

<?php require "includes/connection.php"; ?>

<h2> Update Book </h2>

<form method="post">
    <div>
        <label for="title">Book</label>
        <input name="title" id="title" placeholder="Book Title" value="<?= htmlspecialchars($title); ?>">
    </div>

    <div>
        <label for=" description">Description</label>
        <textarea name="description" rows="4" cols="40" id="description" placeholder="Book Description"><?= htmlspecialchars($description); ?></textarea>
    </div>

    <div>
        <label for=" Price">Price</label>
        <input type="number" name="Price" id="Price" placeholder="Price" value="<?= htmlspecialchars($price); ?>">
    </div>

    <div class="select">
        <label for="user_id">user_id</label>
        <select name="user_id" id="user_id">
            <option value="0">--Select a user--</option>
            <?php
            $sql = "SELECT id, name FROM users";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['id'] . "' > " . $row['name'] . "</option>";
            }
            $result->close();
            $conn->close();
            ?>
        </select>
    </div>

    <button>Edit</button>
</form>
<a href="imageUpload.php?book_id=<?= $id; ?>">Image Upload</a>