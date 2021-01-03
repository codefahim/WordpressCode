<?php
	require_once ('function.php');
	$project->connection();

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