<?php 
	namespace App\Controller\Component;
	
	interface Component {

		/**
		*  handle  html markups to add to the component
		*/
		public function getCore();

		//public function getCss();

	}

?>