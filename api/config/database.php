<?php
// used to get mysql database connection
class Database{

	// specify your own database credentials
	private $host = "mycodes4you.com";
	private $db_name = "admin_api2rest";
	private $username = "apiv2G-xYt4_l";
	private $password = "707Uw$mr";
	public $con;

	// get the database connection
	public function getConnection(){

		$this->conn = null;

		try{
			$this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
		}catch(PDOException $excception){
			echo "Connection error: " . $exception->getMessage();
		}

		return $this->conn;
	}
}