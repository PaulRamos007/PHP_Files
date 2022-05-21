<?php

require 'includes/connection.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "SELECT * FROM jokes WHERE id = ?";

    $result = $conn->prepare($sql);

    if ($result === false) {
        echo $conn->error;
    } else {
        $result->bind_param("i", $id);
        $result->execute();
        $final = $result->get_result();
        $jokes = $final->fetch_assoc();
    }
} else {
    $jokes = null;
}

?>


<?php require 'includes/header.php'; ?>

<?php if ($jokes == null) : ?>
    <p>Jokes not found</p>
<?php else : ?>

    <article>
        <h2>Title</h2>
        <h3><?= $jokes['title']; ?></h3>
        <h4>Teaser</h4>
        <p><?= $jokes['teaser']; ?></p>
        <h4>The Joke!</h4>
        <p><?= $jokes['joke_text']; ?></p>
        <h4>Created</h4>
        <p><?= $jokes['created_at']; ?></p>
    </article>

<?php endif; ?>

<?php require 'includes/footer.php'; ?>