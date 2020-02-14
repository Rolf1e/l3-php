<?php 

	namespace App\Model;

	class ContactForm 
	{
		private $id;
		private $firstname;
		private $name;

		function __construct($firstname, $name, $id = null)
		{
			$this->firstname = $firstname;
			$this->name = $name;
			$this->id = $id;
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


		public function getId() {
			return $this->id;
		}

		public function setId($id) {
			$this->id = $id;
			return $this;
		}
	}

?>