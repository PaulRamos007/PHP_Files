<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
</head>
<body>
    <main>
     <?php 
     if($_SERVER['REQUEST_METHOD'] == 'POST'){
        try{
            $userName = $_POST['username'];
            $formPassword = $_POST['password'];
            if(!empty($formPassword) && !empty($formPassword)){
                include 'includes/dbConnection.php';
                $sql = "SELECT password FROM user WHERE username = ?";
                if($stmt = $conn->prepare($sql)){
                    $stmt->bind_param("s", $userName);
                    $stmt->execute();
                    $stmt->bind_result($dbPassword);
                    $stmt->fetch();
                    $stmt->close();

                    if(password_verify($formPassword, $dbPassword)){
                        echo "Successfully login.";
                        //set session here
                    }else{
                        echo "Invalid login details. Please try again.";
                    }
                }else{
                    echo "Connection failed.";
                }
                $conn->close();
            }else{
                echo "Please fill in all the required fields.";
            }
        }catch(Exception $e){
            echo "Something went wrong. Please try again." . $e->getMessage();
        }
     }
     ?>
     
        <form action="" method="POST">
            <p>
                <label for="username">Username:</label>
                <input type="text" name="username" />
            </p>
            <p>
                <label for="password">Password:</label>
                <input type="password" name="password" />
            </p>
            <input type="submit" name='submit' value="Login" />
        </form>
    </main>
    
</body>
</html>