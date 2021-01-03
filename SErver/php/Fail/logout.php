<?php 
session_start();
session_destroy();
$_SESSION= array();
setcookie("fahim", "John Carter", time()- 60*60*24*5);
header ('location: index.php');

 ?>