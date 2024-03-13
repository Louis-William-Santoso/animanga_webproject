<?php
   $hostname="localhost";
    $username="root";
    $password="";
    $database_user="userdatabase";

    $db = mysqli_connect($hostname, $username, $password, $database_user);

    if ($db -> connect_error){
        echo "database corrupt";
    }
?>