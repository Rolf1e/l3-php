<?php
	namespace App\Framework;
		




use App\Controller\Contact;

class Router {

		private $pattern = '.*\{[\w]+\}';
		private $dynamic = [];
		private $static = [];
		private $actualLink;

		public function __construct(){
			$this->actualLink = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : null;
		}

		public function exec() {
			$routes = require_once 'routes.php';

			$this->resolveAllRoutes($routes);
			if(!$this->resolveActualLink()) {
				echo $this->error();
			}

		}

		private function resolveAllRoutes($routes) {
			foreach ($routes as $uri => $value) {
				if(mb_ereg_match($this->pattern, $uri)) {
					array_push($this->dynamic, $uri);
					continue;
				}
				array_push($this->static, $uri);
			}
		}

		private function resolveActualLink() {
			if(array_key_exists($this->actualLink, $this->static)) {
				$this->seekStatic();
				return true;
			}

			$keys = array_keys($this->dynamic);
			$toSeek = explode($this->pattern, $this->actualLink);
			var_dump($keys);
			var_dump($toSeek);
			preg_grep(end($toSeek), $keys);


			return false;
		}

		private function seekStatic(){
			foreach ($this->static[$this->actualLink] as $key => $value) {
			    $class = new $key();
			    call_user_func(array($class, $value));
            }
		}

		private function seekDynamic() {
            foreach ($this->dynamic as $key) {

            }

		}

		private function error(){
			return '<p> Path doesn\'t exist</p>';
		}

	}
	

?>
