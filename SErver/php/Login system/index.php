<?php 
		session_start();

		 if(isset($_SESSION['fahim'])){
	 	header ('location: admin.php');
	 }


	if(isset($_POST['login'])) {
		$Email= $_POST['email']; 
		$Password= $_POST['password'];

		define('EMAIL','fahim@gmail.com');
		define('PASSWORD','123');

		if($Email== EMAIL && $Password== PASSWORD) {

			$_SESSION['fahim']= '';
			header('location: admin.php');
		}else{
			$fail= 'Password mile nai bai';
		}

		 
	}



?>

<!-- ------------------------------------------- -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login to Admin</title>
</head>
<body>
	<form action="" method="POST">
		<input type="email" name="email" placeholder="Type Your Mail Add." required >
		<input type="password" name="password" placeholder="Type Your password" required >
		<input type="submit" name="login" value="login">
	</form>
	


	<?php if(isset($fail)){echo $fail;} ?>


</body>
</html>