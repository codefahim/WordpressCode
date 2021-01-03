<?php 

function user_log_in(){
	if(isset($_SESSION['FAHIM']) || isset($_COOKIE['FAHIM'])){
		return true;
	}else{
		return false;
	}

 }

 ?>
