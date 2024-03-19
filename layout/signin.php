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
    <form action="signin.php" method="POST">
    <h1>Sing-in</h1>
        <p id="pp">By loging in or signing up, you are agree with our <a href="">Privacy Policy</a></p>
        <p><input class="input" type="text" placeholder="Username" name="Username" /></p>
        <p><input class="input" type="text" placeholder="Email" name="Email" /></p>
        <p><input class="input"type="password" placeholder="Password" name="Password"/></p>
        <p><input class="input"type="password" placeholder="Confirm Password" name="ConfirmPassword"/></p>
        <button class="button" type ="submit" name="signup"> Sing-in </button>
    </form> </div>
</body>
</html>

<?php
    include "../admin_pages/database.php";
    if ($db -> connect_error){
        echo "database corrupt";
        die();
    }
    //insert var pw & username
    elseif (isset($_POST['signup'])){
        $id = NULL;
        $user_name = $_POST['Username'];
        $email= $_POST['Email'];
        $passcode = $_POST['Password'];
        $ConfirmPassword = $_POST['ConfirmPassword'];

        
        if ($passcode === $ConfirmPassword){
            $query = "INSERT INTO `user_data` (`id`, `username`, `password`, `date`, `email`) VALUES (NULL, '$user_name', '$passcode', current_timestamp(), '$email')";
            //$result = $db -> query($query);
            //header ("location: ../TIT PJ/new homepage.php"); ILoveJewish

            if ($db->query($query) === FALSE){
                echo "SQL e BOSOKKKKKKK!!!!";
            }else{
                echo "data masok";
            }
        }else{
            echo "Password doesn't match!!";
        }
    }
    die ();
?>