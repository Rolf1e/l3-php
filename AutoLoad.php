<?php
require_once 'config.php';

class AutoLoad {
	
	static function run(){
		spl_autoload_register(array('AutoLoad', "myAutoLoader"));
	}

	static function myAutoLoader($className){
		$className = str_replace('\\', DS, $className);
		$className = lcfirst($className);

		require_once( $className . ".php");
	}
}
?>

