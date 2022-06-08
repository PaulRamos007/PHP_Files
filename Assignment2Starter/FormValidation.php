<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form validation project</title>
</head>

<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        try {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $contact = $_POST["contact"];
            $gender = $_POST["gender"];
            $website = $_POST["website"];
            $submit = $_POST["submit"];

            if (empty($name)) {
                $nameError = "Name is required.";
            } else {

                if (!preg_match("^[a-zA-Z0-9]{4,16}$", $name)) {
                    $nameError = "Only letters and space are allowed in name field.";
                }
            }

            if (empty($email)) {
                $emailError = "Email address is required.";
            } else {

                if (!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+
                ([a-zA-Z0-9\._-]+)+$/", $email)) {
                    $emailError = "Invalid email format.";
                }
            }


            if (empty($contact)) {
                $contactError = "Contact number is required.";
            } else {

                if (!preg_match('/^[0-9()+--]{10,15}$/', $contact)) {
                    $contactError = "Please provide a valid contact number.";
                }
            }

            //website validation
            if (empty($website)) {
                $websiteError = "Website url is required.";
            } else {

                if (!preg_match('|^http(s)?:\/\/[a-z0-9-]+(.[a-z0-9-]+)*(:[0-9]+)?(\/.*)?$|i', $website)) {
                    $websiteError = "Invalid website url format.";
                }
            }

            if (isset($submit)) {
                if ($nameError == '' && $emailError == "" && $contactError == "" && $genderError == "" && $websiteError == "") {
                    echo "Username: " . $name . "</br>";
                    echo "Email: " . $email . "</br>";
                    echo "Contact: " . $contact . "</br>";
                    echo "Gender: " . $gender . "</br>";
                    echo "Website: " . $website . "</br>";
                    echo "Comment: " . $comment . "</br>";
                }
            } else {
                echo "<span class=ErrorRed>The information in the form is not valid. Please fill correct details</span>";
            }
        } catch (Exception $e) {
            echo "Invalid Details", $e->getMessage();
        }
    }
    ?>
    <h2>Form Validation Assignment</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <legend>Please Fill All the Fields with *</legend>
        <fieldset>
            Name:<br>
            <input class="input" type="text" Name="name"><?php echo $nameError; ?><span class=ErrorRed>*</span><br>
            Email:<br>
            <input class="input" type="text" Name="email"><?php echo $emailError; ?><span class=ErrorRed>*</span><br>
            Contact No:<br>
            <input class="input" type="text" Name="contact"><?php echo $contactError; ?><span class=ErrorRed>*</span><br>
            Gender:<br>
            <input class="radio" type="radio" Name="gender" value="male">Male
            <input class="radio" type="radio" Name="gender" value="Female">Female<span class=ErrorRed> *</span><br>
            Website:<br>
            <input class="input" type="text" Name="website"><?php echo $websiteError; ?><span class=ErrorRed> *</span><br>
            Comment:<br>
            <textarea Name="comment" rows="5" cols="25"></textarea>
            <br>
            <br>
            <input type="submit" Name="submit" value="Submit Your Information">
        </fieldset>

    </form>
</body>

</html>