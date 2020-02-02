<?php 
	use App\Controller\Component\Header;
	use App\Controller\Component\Footer;

	class Form extends ControllerAbstract implements Component {

		private $header;
		private $footer;

		public function __construct() {

		}

		public function index() {
			$this->render();
		}


		private function loadLayout() {
			$this->header = $this->setHeader('Form Page');
			$this->footer = $this->setFooter('Footer');
		}

		private function setHeader($title, $core = '') {
			$header = new Header($title);
			$header->setCore($core);
			return $header;
		}

		private function setFooter($core = ''){
			$footer = new Footer($core);
			return $footer;
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