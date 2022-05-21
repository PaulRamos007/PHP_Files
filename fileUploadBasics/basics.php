<?php

if (isset($_FILES['image'])) {
    echo "<pre>";
    print_r($_FILES['image']);
    echo "</pre>";
}

$name = $_FILES['image']['name'];

$tmpname = $_FILES['image']['tmp_name'];

move_uploaded_file($tmpname, "uploads/" . $name);

?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" enctype="multipart/form-data">
        <div>
            <label for="file">Image File</label>
            <input type="file" name="image" id="file">
        </div>

        <button>Upload</button>
    </form>
</body>

</html>