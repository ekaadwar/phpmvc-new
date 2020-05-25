<?php 

class Database
{
	private $host = DB_HOST, 
			$user = DB_USER, 
			$pass = DB_PASS, 
			$db_name = DB_NAME;

	private $dbh, 
			$stmt;

	public function __construct()
	{
		$dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name;
		$option = 	[
						PDO::ATTR_PERSISTENT => TRUE,
						PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
					];

		try {
			$this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function query($query)
	{
		$this->stmt = $this->dbh->prepare($query);
	}

	public function bind($param, $value, $type = NULL)
	{
		if(is_null($type))
		{
			switch (TRUE) {
				case is_null($value):
					$type = PDO::PARAM_NULL;
					break;
				case is_bool($value):
					$type = PDO::PARAM_BOOL;
					break;
				case is_int($value):
					$type = PDO::PARAM_INT;
					break;

				default:
					$type = PDO::PARAM_STR;
					break;
			}
		}
		$this->stmt->bindValue($param, $value, $type);
	}

	public function execute(){
		$this->stmt->execute();
	}

	public function allResult(){
		$this->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function singleRes(){
		$this->execute();
		return $this->stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function rowCount()
	{
		return $this->stmt->rowCount();
	}

}