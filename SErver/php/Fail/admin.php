
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
	<title>HI</title>
</head>
<body>
	Welcome to Admin panel. <br> <br>

	<a href="logout.php" name="logout">Logout(fahim)</a>
</body>
</html>