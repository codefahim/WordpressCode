
<?php 
session_start();
include ('function.php');

if(!user_log_in()){
	header ('location: index.php');
}
 ?>











<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Panel</title>
</head>
<body>
	<h1>Welcome!</h1>








	<br>
	<br>
	<br>
	<br>

	<a href="logout.php">Logout</a>
</body>
</html>