
<?php 
session_start();
include ('function.php');

if(user_log_in()){
	header ('location: admin.php');
}

if(isset($_POST['loggin'])){

	$username= $_POST['username'];
	$password= $_POST['password'];

	$keep= isset($_POST['keep']);

	define('EMAIL','fahim@gmail.com');
	define('PASSWORD','123');

	if($username== EMAIL && $password== PASSWORD){
		$_SESSION['FAHIM']='';
		setcookie('FAHIM',$keep, time()+ 120);

		header ('location: admin.php');



	}else{
		$error= "Password does not match";
	}
}

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login System</title>
</head>
<body>
	<form action="" method="POST">
		<label for="user">User:</label>
		<input type="email" name="username" id="user"> <br><br>
		<label for="password"> Password:</label>
		<input type="password" name="password" id="password">  <br><br>
		<label for="keep"> Keep me loggin</label>
		<input type="checkbox" name="keep" id="keep"> <br><br>
		<input type="submit" name="loggin" value="loggin"> <br><br>
		<?php if(isset($error)){
			echo $error;
		} ?>
	</form>
</body>
</html>