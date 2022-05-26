<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>
    <style>
        label{
            display:inline-block;
            width:100px;
        }
    </style>
</head>
<body>
    <main>
   
   <?php

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        try{
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $userName = $_POST['username'];
            $email = $_POST['email'];
            $passWord = $_POST['password'];

            if(!empty($firstName) && !empty($lastName) && !empty($userName) && !empty($email) && !empty($passWord)){
                include 'includes/dbConnection.php';
                $sql = "INSERT INTO user (firstname, lastname, username, email, password) VALUES(?,?,?,?,?)";
                if($stmt = $conn->prepare($sql)){
                    $stmt->bind_param("sssss", $firstName, $lastName, $userName, $email, $passWord);
                    $stmt->execute();
                    echo "Inserted Row with ID: ", $conn->insert_id;
                    $stmt->close();
                }else{
                    echo "Connection failed.";
                }
                $conn->close();
            }else{
                echo "Please fill all the fields.";
            }
        }catch(Exception $e){
            //echo $e->getMessage();
            echo "Something went wrong. Please try again.", $e->getMessage();
        }
    }

    ?>

    <h4>Register an Account</h4>
    <form method="POST" action="">
        <p>
            <label for="firstName">First Name</label>
            <input type="text" name= "firstName" maxlength= "30" />
        </p>
        <p>
            <label for="lastname">Last Name</label>
            <input type="text" name= "lastName" maxlength= "30"/>
        </p>
        <p>
            <label for="username">Username</label>
            <input type="text" name= "username" maxlength= "30"/>
        </p>
        <p>
            <label for="email">email</label>
            <input type="email" name="email" maxlength= "60"/>
        </p>
        <p>
            <label for="password">Password</label>
            <input type="password" name="password" maxlength= "15"/>
        </p>
        
        <input type="submit" name="submit" value="Save" />
        <input type="reset" name="reset" value="Cancel" />
            
        </form>
    </main>
    
</body>
</html>