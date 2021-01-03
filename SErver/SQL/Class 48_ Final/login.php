<?php
	require_once ('config.php');

if(isset($_POST['Login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
   $query= mysqli_query($connection,"SELECT * FROM user WHERE email='$email' ");
    
    $row = mysqli_fetch_assoc ($query);
    
    if($password == $row['password']){
        print_r($row);
    }
}



?>



 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Login Form</title>
 	<link rel="stylesheet" href="style.css">
 </head>
 <body>

 	<div class="reg">
		 	<form action="" method="POST">
		 		
		 		<label for="email">Email Address:</label> <br>
		 		<input type="text" name="email" id="email"> <br>
					
		 		<label for="password">Password:</label> <br>
		 		<input type="text" name="password" id="password"> <br>

		 		<input type="submit" name="Login" value="Login">
		 	</form>
		 	
 	</div>
 </body>
 </html>