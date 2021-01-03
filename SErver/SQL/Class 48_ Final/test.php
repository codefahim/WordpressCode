<?php
require_once('config.php');

if(isset($_POST['submit'])){
   $email = $_POST['email'];
    $password = $_POST['password']; 
    $query = mysqli_query($connection,"SELECT * FROM user WHERE email='$email' ");
    
    $row = mysqli_fetch_assoc ($query);
    if($password == $row['password']){
        echo 'milce';
    }else {
        echo 'mile nai';
    }

    
  
}






?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>test</title>
</head>
<body>
    <form action="" method="POST">
       <label for="email">Email Address:</label> <br>
        <input type="email" name="email" id="email"><br>
        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password"><br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>