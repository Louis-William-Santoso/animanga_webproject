<?php
    include "../admin_pages/database.php";
  

    if ($db -> connect_error){
        echo "database corrupt";
        die();
    }
    //insert var pw & username
    if (isset($_POST['submit'])){
        $username = $_POST['Username'];
        $password = $_POST['Password'];
        $ConfirmPassword = $_POST['ConfirmPassword'];

        
        if ($password === $ConfirmPassword){
            $sql = "INSERT INTO user_data (username, password) VALUES ('$username', '$password')";
            header ("location: ../admin_pages/main_homepage.php"); 
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
    <style>
        body{
    background-color: #423c3c;
}

#outter{
    background-image : url("ningguang.png");
    height: 100%;
    padding: 150px;
}

#basabasi {
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    list-style-type:none;
    color:white;
    background-color: rgb(109, 109, 109);
    width:750px;
    border-radius: 5px;
    margin: 80px;
    padding: 30px 20px;
    list-style-type:none;
} #basabasi h1 {
    font-size: 50px;
    display:inline;
} #pp {
    font-size: 25px;
    color: white;
}

.input {
 box-sizing:content-box;
 width: 80%;
 padding: 10px;
 font-size: 15px;
 margin-bottom: 20px;
}

.button {
    background-color: rgb(97, 97, 97);
    color: white;
    font-size: 11px;
    width: 20%;
    border:none;
    border-radius: 3px;
    padding: 10px 20px;
}
    </style>
</head>

<body>
    <div id="basabasi">
    <form method="POST" action="signin.php">
    <h1>Singin</h1>
        <p id="pp">By loging in or signing up, you are agree with our <a href="">Privacy Policy</a></p>
        <p><input class="input" type="text" placeholder="Username or Email" name="Username" /></p>
        <p><input class="input"type="password" placeholder="Password" name="Password"/></p>
        <p><input class="input"type="password" placeholder="Confirm Password" name="ConfirmPassword"/></p>
        <button class="button" type ="submit" name="submit"> Sing-in </button>
    </form> </div>
</body>
</html>