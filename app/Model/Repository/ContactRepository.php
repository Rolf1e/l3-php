<?php
	namespace App\Model\Repository;

	use App\DB\Connexion;
	use App\Model\ContactForm;
	use App\DB\Auth;

	ini_set('display_errors', true);
	error_reporting(E_ALL);

	class ContactRepository
	{

		private $conn;

		function __construct() {
			$auth = new Auth(DB_HOST, DB_DATABASE, DB_USER, DB_PWD);
			$this->conn = Connexion::getInstance();
			$this->conn->setAuth($auth);	
		}

		private function retrieveContact() {
			return new ContactForm($_POST['firstname'], $_POST['name']);
		}

		function save() {
			$contactForm = $this->retrieveContact();
			$insert = $this->conn->insertDB('contact', ['nom', 'prenom'], [$contactForm->getName(), $contactForm->getFirstName()]);	
			echo $insert;
			$this->conn->exec($insert);
		}

		function extract() {
			$contactForm = $this->retrieveContact();
			$select = $this->conn->selectDBWithCondition('contact', ['id', 'nom', 'prenom'], ' nom ' . ' LIKE \'' . $_POST['name'] . '\' and prenom LIKE \'' . $_POST['firstname'] . '\'');
			$result = $this->conn->query($select);
			return new ContactForm($result[0]['prenom'], $result[0]['nom']);
		}

		function extractall() {
			$select = $this->conn->selectDB('contact', ['id', 'nom', 'prenom']);
			$result = $this->conn->query($select);
			return $this->parsingResultQuery($result);
		}

		function parsingResultQuery($resultQuery) {
			$contacts = [];
			foreach ($resultQuery as $value) {
				array_push($contacts, new ContactForm($value['prenom'], $value['nom'], $value['id']));
			}
			return $contacts;
		}


	}



?>