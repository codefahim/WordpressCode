
<?php
session_start();

include ('function.php');

if(user_log_in()){
	header ('location: admin.php');
}
if(isset($_POST['login'])){
	$username= $_POST['username'];
	$password= $_POST['password'];

	$keep = isset($_POST['keep']);

	define('EMAIL', 'fahim@gmail.com');
	define('PASSWORD', '123');

	if($username== EMAIL && $password== PASSWORD){

		$_SESSION['fahim']= 'ok';
		setcookie("fahim", "John Carter", time()+ 60*60*24*5);
		header ('location: admin.php');
	}else {
		$error= "password mile nai bai";
	}

}else {
	setcookie("fahim"," ");
}
print_r($_COOKIE);
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login System</title>
</head>
<body>
	<form action="" method="POST">
		<label for="username">Username:</label>
		<input type="email" id="username" name="username" required> <br><br>
		<label for="password">Password:</label>
		<input type="password" name="password" id="password" required><br><br>
		<label for="checkbox">Keep me Login</label>
		<input type="checkbox" id="checkbox" name="keep"><br><br>
		<input type="submit" name="login" value="login"> <br><br>

		<?php if (isset($error)){
			echo $error;
		} ?>

		
	</form>
</body>
</html>