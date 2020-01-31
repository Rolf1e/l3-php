<?php 
namespace App;
class Customer {

	private $lastName;
	private $firstName;
	private $age;

	public function __construct($lastName = null, 
				$firstName = null,
				$age = null) {
		$this->lastName = $lastName;
		$this->firstName = $firstName;
		$this->age = $age;
			
	}


	public function getLastName(){
		return $this->lastName;
	}

	public function setLastName($lastName){
		$this->lastName = $lastName;
		return $this;
	}

	public function getFirstName(){
		return $this->firstName;
	}

	public function setFirstName($firstName){
		$this->firstName = $firstName;
		return $this;
	}

	public function getAge(){
		return $this->age;
	}

	public function setAge($age){
		$this->age = $age;
		return $this;
	}

	public function getFullName(){
		return $this->lastName . ' ' . $this->firstName;
	}

}

?>

