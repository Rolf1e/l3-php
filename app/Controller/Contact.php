<?php 

	namespace App\Controller;

	use App\Controller\Component\Header;
	use App\Controller\Component\Footer;
	use App\Model\Repository\ContactRepository;
	use App\Model\ContactForm;

	class Contact extends ControllerAbstract {

		public $header;
		public $footer;
		public $contactForm;

		public function index(){
			$this->loadLayout();
			$this->render();
		}

		public function show() {
			$contactRepository = new ContactRepository();
			$this->contactForm = $contactRepository->extract();
			include_once 'app/template/contact.phtml';
		}

		public function fromId($link) {
            $contactRepository = new ContactRepository();
            $this->contactForm = $contactRepository->showFromId($link);
            include  'app/template/contact.phtml';
        }

		public function showAll() {
			$contactRepository = new ContactRepository();
			$contacts = $contactRepository->extractAll();
			foreach ($contacts as $contact) {
				echo '<div>';
				echo '<p> id :' . $contact->getId() . '</p>';
				echo '<p> Nom :' .  $contact->getName() . '</p>';
				echo '<p> Prenom :' .  $contact->getFirstName() . '</p>';
				echo '</div>';
			}

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


		public function getName() {
			return $this->contactForm->getName();
		}

		public function getFirstName() {
			return $this->contactForm->getFirstName();
		}

	}

?>