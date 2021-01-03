<?php 
	class project{
		public function connection(){
			if(file_exists(dirname(__FILE__).'/config.php')){
		require_once(dirname(__FILE__).'/config.php');
	}
		}
	}


$project =new project();
 ?>