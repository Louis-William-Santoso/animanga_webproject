<?php
 include "../admin_pages/database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HALLO ini admin Page</h1>
    <table>
        <tr>
            <td>id</td>
            <td>Username</td>
            <td>Password</td>
            <td>E-mail</td>
            <td>created on</td>
        </tr>
        <tr>
            <!--tampilan datane pake while loop-->
        <?php
        $users= "SELECT * FROM user_data ";
            for($id = 1; $id <= $wong['id']; $id++){
                while (mysql_fetch_array($users)){
                echo '<td>'$data['id']'</td>';
                echo '<td>'$data['username']'</td>';
                echo '<td>'$data['password']'</td>';
                echo '<td>'$data['email']'</td>';
                echo '<td>'$data['date']'</td>';}}
        ?>
        </tr>
    </table>
</body>
</html>
