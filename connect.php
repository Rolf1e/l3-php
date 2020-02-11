<?php
	ini_set('display_errors', true);
	error_reporting(E_ALL);
	
	require_once('AutoLoad.php');		
	require_once('config.php');

	use App\DB\Connexion;
	use App\DB\Auth;
	
	AutoLoad::run();

	try {
		$auth = new Auth(DB_HOST, DB_DATABASE, DB_USER, DB_PWD);
		$conn = Connexion::getInstance();
		$conn->setAuth($auth);
		
		$select = $conn->selectDB('toto', ['*']);
		$insert = $conn->insertDB('toto', ['tutu', 'name'], ['5', '\'quentin\'']);

		var_dump($conn->query($select));
		$conn->exec($insert);
		
	} catch(PDOException $e) {
		var_dump($e->getMessage());
		die;
	}

?>