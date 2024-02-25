<?php
    include "../database.php";
    //insert var pw & username
    if (isset($_POST['submit'])){
        $username = $_POST['Username'];
        $password = $_POST['Password'];
        $ConfirmPassword = $_POST['ConfirmPassword'];

        
        if ($password === $ConfirmPassword){
            $sql = "INSERT INTO user_data (username, password) VALUES ('$username', '$password')";
        }else{
            echo "Password doesn't match!!";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GTS</title>

    <!--link-->
    <link rel="shortcut icon" href="main_homepage_asset/ikon.png" type="image/x-icon">
</head>

<body>
    <form method="POST" action="signin.php">
        <h1>Singin</h1>
        <p>By loging in or signing up, you are agree with our <a href="">Privacy Policy</a></p>
        <p><input type="text" placeholder="Username or Email" name="Username" /></p>
        <p><input type="password" placeholder="Password" name="Password"/></p>
        <p><input type="password" placeholder="Confirm Password" name="ConfirmPassword"/></p>
        <button type ="submit" name="submit"> Sing-in </button>
    </form> 
</body>
</html>