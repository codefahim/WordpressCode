<?php 
	
	require_once ('config.php');



	if(isset($_POST['register'])){
		$First_name = $_POST['First_name'];
		$Last_name = $_POST['Last_name'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		$error =array ();

		if($First_name == NULL){
			$error['First_name'] = 'First name is blank';
		}

		if($Last_name == NULL){
			$error['Last_name'] = 'Last name is blank';
		}

		if($email == NULL){
			$error['email'] = 'email address is blank';
		}

		if($password == NULL){
			$error['password'] = 'Password is blank';
		}elseif(strlen($password)<=6){
			$error['password'] = 'Password must be upto 6';
		}

		if(count($error)==0){

			$query = mysqli_query ($connection,"INSERT INTO user VALUES (NULL,'$First_name','$Last_name','$email','$password')");

			if($query){
				$success = "You are succesfully registerd! Please <a href='login.php'>Login </a>";
			};
		}


	}

 ?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Registration Form</title>
 	<link rel="stylesheet" href="style.css">
 </head>
 <body>

 	<div class="reg">
		 	<form action="" method="POST">
		 		<label for="First_name">First Name:</label> <br>
		 		<input type="text" name="First_name" id="First_name"> <br>
					
					<div class="error">
						<?php 
							if(isset($error['First_name'])){
								echo ($error['First_name']);
							}
						 ?>
					</div>

		 		<label for="Last_name">Last Name:</label> <br>
		 		<input type="text" name="Last_name" id="Last_name"> <br>

		 			<div class="error">
						<?php 
							if(isset($error['Last_name'])){
								echo ($error['Last_name']);
							}
						 ?>
					</div>
		 		<label for="email">Email Address:</label> <br>
		 		<input type="text" name="email" id="email"> <br>

		 			<div class="error">
						<?php 
							if(isset($error['email'])){
								echo ($error['email']);
							}
						 ?>
					</div>
		 		<label for="password">Password:</label> <br>
		 		<input type="text" name="password" id="password"> <br>

		 			<div class="error">
						<?php 
							if(isset($error['password'])){
								echo ($error['password']);
							}
						 ?>
					</div>
		 		<input type="submit" name="register" value="Register">
		 	</form>
		 	<div class="success">
		<?php 
			if(isset($success)){
				echo $success;
			}
		 ?>
	</div>
 	</div>


<!-- register_part -->

 	<table class="table">
			
			<tr>
				<th>User_ID</th>
				<th>First_Name</th>
			 	<th>Last_Name</th>
			 	<th>Email_address</th>
			 	<th>Your_Password</th>
			 </tr>	

 			 <?php 
	 
	  			 $data = mysqli_query($connection,"SELECT * FROM user");
	 
	  			 	while($row =mysqli_fetch_object($data)): ?>
	 				<tr>
	 		 			<td><?php echo $row->id; ?></td>
	 		 			<td><?php echo $row->fname; ?></td>
	 		 			<td><?php echo $row->lname; ?></td>
	 		 			<td><?php echo $row->email; ?></td>
	 		 			<td><?php echo $row->password; ?></td>
	 		 		</tr>
	 		 <?php endwhile; ?>
 		 
 		
 	</table>
 </body>
 </html>