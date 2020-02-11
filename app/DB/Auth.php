<?php

namespace App\DB;

class Auth
{
	private $host;
	private $database;
	private $user;
	private $pwd;
	
	function __construct($host, $database, $user, $pwd) {
		$this->host=$host;
		$this->database=$database;
		$this->user=$user;
		$this->pwd=$pwd;
	}

	function getHost() {
		return $this->host;
	}

	function getDatabase() {
		return $this->database;
	}

	function getUser() {
		return $this->user;
	}

	function getPwd() {
		return $this->pwd;
	}
}