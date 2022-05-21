<?php require './includes/connection.php';

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
    } else {
        echo "No book found";
    }
} else {
    echo "Provide a book_id, No book found";
}

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

        $destination = "./tempUploads/$filename";

        if (file_exists($destination)) {
            echo "File already exists in the folder";
        } else {
            if (move_uploaded_file($_FILES['file']['tmp_name'], $destination)) {

                if (setImageFile($conn, $filename, $id) == true) {
                    header("Location: bookdetails.php?book_id=$id");
                } else {
                    echo "image is not uploaded successfully";
                }
            } else {
                throw new Exception('Unable to move the uploaded file');
            }
        }
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
}

function setImageFile($conn, $filename, $id)
{
    $sql = "UPDATE books SET image_file = ? WHERE book_id=?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $filename, $id);
    return $stmt->execute();
}

?>


<?php require './includes/header.php'; ?>

<h2>Image Upload</h2>

<form method="post" enctype="multipart/form-data">
    <div>
        <label for="file">Image File</label>
        <input type="file" name="file" id="file">
    </div>
    <button>Upload</button>
</form>

<?php require './includes/footer.php'; ?>