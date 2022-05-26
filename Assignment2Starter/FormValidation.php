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
    <h2>Form Validation Assignment</h2>
    <form action="" method="">
        <legend>Please Fill All the Fields with *</legend>
        <fieldset>
            Name:<br> 
            <input class="input" type="text" Name="name"><span class=ErrorRed>*</span><br>
            Email:<br> 
            <input class="input" type="text" Name="email"><span class=ErrorRed>*</span><br>
            Contact No:<br> 
            <input class="input" type="text" Name="contact"><span class=ErrorRed>*</span><br>
            Gender:<br> 
            <input class="radio" type="radio" Name="gender" value="male">Male
            <input class="radio" type="radio" Name="gender" value="Female">Female<span class=ErrorRed> *</span><br>
            Website:<br> 
            <input class="input" type="text" Name="website"><span class=ErrorRed> *</span><br>
            Comment:<br> 
            <textarea Name="comment" rows="5" cols="25"></textarea>
            <br>
            <br>
            <input type="submit" Name="submit" value="Submit Your Information">
        </fieldset>

    </form>
</body>
</html>