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
} else {
    $books = null;
}

?>


<?php require 'includes/header.php'; ?>

<?php if ($books == null) : ?>
    <p>Book not found</p>
<?php else : ?>

    <article>
        <?php if (!empty($books['image_file'])) : ?>
            <img src="tempUploads/<?= $books['image_file']; ?>" <?php endif; ?> <br>
            <h2><?= $books['title']; ?></h2>
            <p><?= $books['description']; ?></p>
            <p><?= $books['Price']; ?></p>
    </article>

<?php endif; ?>

<a href="editbook.php?book_id=<?= $_GET['book_id']; ?>">Edit Book</a>

<?php require 'includes/footer.php'; ?>