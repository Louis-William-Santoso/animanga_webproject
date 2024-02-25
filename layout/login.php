<?php

include "../database.php";
    //var pw & username
    if(isset($_POST['login_button'])){
        $username = $_POST['Username'];
        $password = $_POST['Password'];
    
    //compare data dari database
        $sql = "SELECT * FROM user_data WHERE 
        username='$username' AND password='$password'";
       

       $hasil = $db->query($sql); 
        if($hasil -> num_rows > 0){
            header ("location: ../main_homepage.php"); 
        } else {
            echo "data tdk ada";
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
    <link rel="shortcut icon" href="../main_homepage_asset/ikon.png" type="image/x-icon">
    <link rel="stylesheet" href="css.css" type="text/css">
    
<!--CSS-->
    <style>
        
    </style>

<!--Php code-->

</head>

<body>
    <!--signin-->
    <div id="basabasi">
        <h1>Hi,</h1>
        <p>By loging in or signing up, you agree with our <a href="">Privacy & Policy</a></p>
    
    <form action="login.php" method="POST">
        <p><input type="text" placeholder="Username or Email" name="Username" /></p>
        <p><input type="password" placeholder="Password" name="Password"/></p>
        <button type ="submit" name="login_button"> Login </button>
        <br>You don't have an account, <a href="signin.php">let's make it for you :3</a></br>
    </form> 
    </div>
</body>
</html>