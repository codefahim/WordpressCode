<?php 
function user_log_in(){
	if(isset($_SESSION['fahim']) || isset($_COOKIE['fahim'])){
 		return true;}
 		else {
 			return false;
 		}
}
 ?>