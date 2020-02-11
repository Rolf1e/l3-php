<?php
	
 	namespace App\DB;

	class Singleton
	{
		private static $_instance = null;
		
		private function __construct()
		{
			# code...
		}

		public static function getInstance() {
				if(is_null(self::$_instance)) {
					$calledClass = get_called_class();
					self::$_instance = new $calledClass();
				}
				return self::$_instance;
			}
	}
?>