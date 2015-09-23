<?php

namespace Classes\Database;

class Database {
	
	public $conn;

	public function __construct() {
		try {
			$this->conn = new \PDO('mysql:host=localhost;dbname=mvc', 'root', 'root');
			echo "Conectado";
		}
		catch (PDOException $e) {
			$e->getMessage();
		}
	}
}