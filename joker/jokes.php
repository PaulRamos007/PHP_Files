<?php

include("includes/connection.php");

$sql = "SELECT * FROM jokes";

$result = $conn->query($sql);

if ($result === false) {
    echo $conn->error;
} else {
    $jokes = $result->fetch_all(MYSQLI_ASSOC);
}

?>

<?php require 'includes/header.php'; ?>

<?php if (empty($jokes)) : ?>
    <p>No jokes found.</p>
<?php else : ?>

    <ul>
        <?php foreach ($jokes as $joke) : ?>
            <li>
                <article>
                    <h3><a href="jokedetails.php?id=<?= $joke['id']; ?>"><?= $joke['title']; ?></a></h3>
                </article>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<?php require 'includes/footer.php'; ?>