<?php
	namespace App\Framework;
		


	class Router {
		
		public function __construct(){
		
		}

		public function exec() {
			$actualLink = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : null;
			// var_dump($actualLink);
			// $actualLink = $_SERVER['REQUEST_URI'];
			if($actualLink != '/' ){	
				$this->seekClasses($actualLink);
			}
			else{
				echo $this->error();
			}
			
		}

		private function seekClasses($actualLink){
			$routes = require_once 'routes.php';
			if(array_key_exists($actualLink, $routes)){
				foreach ($routes[$actualLink] as $key => $value) {
					$class = new $key();
					call_user_func(array($class, $value));
				}
			}
			else{
				echo $this->error();
			}
		}

		private function error(){
			return '<p> Path doesn\'t exist</p>';
		}

	}
	

?>
