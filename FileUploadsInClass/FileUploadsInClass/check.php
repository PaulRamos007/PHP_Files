<?php
// Move the files from images folder to uploads folder
// apply all the validations like correct file type, file size, File Already uploaded, 
// You don't need database for this activity. 
// display the images in the display.html using <img src>.
// Also add some css into this activity to display the images properly.

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    try {
        if (empty($_FILES)) {
            throw new Exception('Invalid Upload');
        }

        switch ($_FILES['file']['error']) {
            case UPLOAD_ERR_OK:
                break;
            case UPLOAD_ERR_INI_SIZE:
                throw new Exception('File is too large. Please upload a new file');
                break;
            case UPLOAD_ERR_NO_FILE:
                throw new Exception('No file to upload');
                break;
            default:
                throw new Exception('There is an error in uploading');
        }

        //Restrict File Size
        if ($_FILES['file']['size'] > 1000000) {
            throw new Exception('File is too large');
        }

        //Restrcit file type
        $file_types = ['image/gif', 'image/png', 'image/jpeg'];

        $finfo = finfo_open(FILEINFO_MIME_TYPE);

        $mime_type = finfo_file($finfo, $_FILES['file']['tmp_name']);

        if (!in_array($mime_type, $file_types)) {
            throw new Exception('Invalid file type. Please upload an image');
        }

        //Moving the uploaded files

        $pathinfo = pathinfo($_FILES['file']['name']);

        $base = $pathinfo['filename'];

        $base = mb_substr($base, 0, 200);

        $filename = $base . "." . $pathinfo['extension'];

        $destination = "./uploads/$filename";

        if (file_exists($destination)) {
            echo "File already exists in the folder";
        } else {
            if (move_uploaded_file($_FILES['file']['tmp_name'], $destination)) {
                header("Location: display.html");
            } else {
                throw new Exception('Unable to move the uploaded file');
            }
        }
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
}

?>


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
            <input type="file" name="file" id="file">
        </div>

        <button>Upload</button>


    </form>
</body>

</html>