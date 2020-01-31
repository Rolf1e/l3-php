<?php
	ini_set('display_errors', true);
	error_reporting(E_ALL);

	require_once('AutoLoad.php');		
	require_once('config.php');

	AutoLoad::run();

	use App\Customer;
	use App\Framework\Router;
	
 	$router = new Router();
	$router->exec();

?>
