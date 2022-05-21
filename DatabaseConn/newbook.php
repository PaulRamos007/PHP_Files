<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    require "includes/connection.php";

    $sql = "INSERT INTO books(title, description, Price, user_id) VALUES (?,?,?,?)";

    $stmt = $conn->prepare($sql);

    if ($stmt == false) {
        echo mysqli_error($conn);
    } else {
        mysqli_stmt_bind_param($stmt, "ssdi", $_POST['title'], $_POST['description'], $_POST['Price'], $_POST['user_id']);
        if (mysqli_stmt_execute($stmt)) {
            $id = mysqli_insert_id($conn);
            echo "Inserted record with ID: : $id";
        } else {
            echo mysqli_stmt_error($stmt);
        }
    }
}
?>

<?php require "includes/connection.php"; ?>

<h2> New Book </h2>

<form method="post">
    <div>
        <label for="title">Book</label>
        <input name="title" id="title">
    </div>

    <div>
        <label for="description">Description</label>
        <textarea name="description" rows="4" cols="40" id="description"></textarea>
    </div>

    <div>
        <label for="Price">Price</label>
        <input type="number" name="Price" id="Price">
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

    <button>Add</button>
</form>