<?php
class connection{
    private $pdo;
	public function getPdo(){
		// $pdo = null;
		// $user = $pass = null;
		$dsn = 'mysql:dbname=portfolio_projects;host=localhost;port:3306';
		$username = 'root';
		$password = '';
		// Set up PDO
		$pdo = new PDO($dsn, $username, $password);
		return $pdo;
    }
}
?>