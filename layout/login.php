<?php
 include "../admin_pages/database.php";

 if ($db -> connect_error){
     echo "database corrupt";
 }
    //var pw & username
    if(isset($_POST['login_button'])){
        $username = $_POST['Username'];
        $password = $_POST['Password'];
    
    //compare data dari database
        $sql = "SELECT * FROM user_data WHERE 
        username='$username' AND password='$password'";
       
    //link ke homepage
       $hasil = $db->query($sql); 
        if($hasil -> num_rows > 0) {
            header ("location: ../main_homepage.php"); 
           //link ke halaman admin (* username=> Lord_Gatot || password=> #Lord_gatot_the_emperor_no1) 
            if($username === 'Lord_Gatot') {
                header ("location: ../admin_pages/admin.php");} 
    }// lek datane gak onok :(
        else {
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

<!--Php code-->

</head>

<body><div id="outter">
    
    <!--signin-->
    <div id="basabasi">
        <h1>Hi,</h1>
        <p id="pp">By loging in or signing up, you agree with our <a href="">Privacy & Policy</a></p>
    
    <form action="login.php" method="POST">
        <p><input class="input" type="text" placeholder="Username or Email" name="Username" /></p>
        <p><input class="input" type="password" placeholder="Password" name="Password"/></p>
        <button class="button" type ="submit" name="login_button"> Login </button>
        <br>You don't have an account, <a href="signin.php">let's make it for you :3</a></br>
    </form> 
</div></div>
</body>
</html>