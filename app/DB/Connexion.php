<?php
	namespace App\DB;

	class Connexion extends Singleton
	{
		private $auth;
		private $pdo;
		
		
		protected function __construct()
		{
		
		}

		public function setAuth($auth) {
			$this->auth = $auth;
			$this->pdo = Connexion::connexion($auth);
		}

		static function connexion($auth) {
			return new \PDO(DB_SYS . ':host=' . $auth->getHost() . ';dbname=' . $auth->getDatabase(), $auth->getUser(), $auth->getPwd());
		}

		function selectDB($table, $fields) {
			$query = 'SELECT ';
			foreach ($fields as $field) {
				$query = $query . $field . ', ';
			}

			$query = rtrim($query, ', ');

			return $query . ' FROM ' . $table . ';';
		}

		function selectDBWithCondition($table, $fields, $conditions) {
			$query = $this->selectDB($table, $fields);

			$query = rtrim($query, ';');

			return $query . ' WHERE ' . $conditions . ';';
		}

		function insertDB($table, $fields, $values) {
			$query = 'INSERT INTO ' . $table . ' (';

			foreach ($fields as $field) {
				$query = $query . $field . ', ';
			}

			$query = rtrim($query, ', ');

			$query = $query . ') VALUES (';

			foreach ($values as $field) {
				$query = $query . '\'' .$field . '\', ';

			}
			
			$query = rtrim($query, ', ');
			
			return $query = $query . ');';
		}

		function query($query) {
			return $this->pdo->query($query)->fetchAll();
		}

		function exec($query) {
			return $this->pdo->exec($query);
		}

		function getPdo() {
			return $this->pdo;
		}

	}

?>