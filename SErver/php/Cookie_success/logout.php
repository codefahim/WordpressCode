<?php 
session_start();
session_destroy();
$_SESSION= array();
	setcookie('FAHIM',$keep, time()- 120);
header ('location: index.php');
 ?>