<?php 

	namespace App\Model;

	class ContactForm 
	{
		
		private $firstname;
		private $name;

		function __construct($firstname, $name)
		{
			$this->firstname = $firstname;
			$this->name = $name;
		}

		public function getFirstName() {
			return $this->firstname;
		}

		public function setFirstName($firstname) {
			$this->firstname= $firstname;
			return $this;
		}

		public function getName() {
			return $this->name;
		}

		public function setName($name) {
			$this->name = $name;
			return $this;
		}
	}

?>