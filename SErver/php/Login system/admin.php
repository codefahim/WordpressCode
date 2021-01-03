<?php  
	 session_start();
	 if(!isset($_SESSION['fahim'])){
	 	header ('location: index.php');
	 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin||Fahim</title>
</head>
<body>
	<h1>Welcome to admin panel</h1>

	<a href="Logout.php">Logout</a>
</body>
</html>