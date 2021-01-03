<?php 
	
	if(file_exists(dirname(__FILE__).'/config.php')){
		require_once (dirname(__FILE__).'/config.php');
	}

	if(isset($_POST['register'])){
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		$error = array();

		if($fname == NULL){
			$error['First_Name'] = 'First Name is Black';
		}

		if($lname == NULL){
			$error['Last_Name'] = 'Last Name is Black';
		}

		if($email == NULL){
			$error['Email_address'] = 'Email address is Black';
		}

		if($password == NULL){
			$error['Password'] = 'Password is Black';
		}elseif (strlen($password) <=8){
			$error['Password'] = 'Password must be more than 8 crl long';
		}

		if(count($error) == 0 ){

			$query = mysqli_query ($connection,"INSERT INTO user (fname,lname,email,password) VALUES ('$fname','$lname','$email','$password')");

			if($query){
				$success = "You are succesfully registerd";
			};
		}

	}
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Project</title>
	<link rel="stylesheet" href="style.css" class="css">
</head>
<body>
	<div class="reg">
		<form action="" method="POST">
			<label for="fname">First Name:</label> <br>
			<input type="text" id="fname" name="fname"> <br>
				<div class="error">
					<?php 
					if(isset($error['First_Name']))
						{echo $error['First_Name'];}
						 ?>
						 	
						 </div>
			<label for="lname">Last Name:</label> <br>
			<input type="text" id="lname" name="lname"> <br>
				<div class="error">
					<?php 
					if(isset($error['Last_Name']))
						{echo $error['Last_Name'];}
						 ?>
						 	
						 </div>
			<label for="email">Email Address:</label> <br>
			<input type="email" id="email" name="email"> <br>
				<div class="error">
					<?php 
					if(isset($error['Email_address']))
						{echo $error['Email_address'];}
						 ?>
						 	
						 </div>
			<label for="password">Password:</label> <br>
			<input type="password" id="password" name="password"><br>
				<div class="error">
					<?php 
					if(isset($error['Password']))
						{echo $error['Password'];}
						 ?>
						 	
						 </div>
			<input type="submit" name="register" value="submit"> 
		</form>
		
	<div class="success">
		<?php 
			if(isset($success)){
				echo $success;
			}
		 ?>
	</div>

	</div>
</body>
</html>