<?php 

	namespace App\Controller;

	use App\Controller\Component\Header;
	use App\Controller\Component\Footer;

	class Contact extends ControllerAbstract {

		public $header;
		public $footer;

		public function index(){
			$this->loadLayout();
			$this->render();
		}

		private function loadLayout(){
			$this->header = $this->setHeader('Contact Page', '<link>');
			$this->footer = $this->setFooter('Flooter');
		}

		// Set up our components
		private function setHeader($title, $core = ''):Header{
			$header = new Header($title);
			$header->setCore($core);

			return $header;
		}

		private function setFooter($core) {  
			$footer = new Footer($core);

			return $footer;
		}


		public function getHeader() {
			return $this->header->getCore();
		}

		public function getTitle() {
			return $this->header->getTitle();
		}

		public function getFooter(){
			return $this->footer->getCore();
		}

	}

?>