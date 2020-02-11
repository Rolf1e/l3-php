<?php
namespace App\Controller\Component;

	class Footer implements Component {

		private $core;

		public function __construct($core) {
			$this->core = $core;
		}

		public function getCore() {
			return $this->core;
		}

		public function setCore($core = '') {
			$this->core = $core;
			return $this;
		} 

	}
?>