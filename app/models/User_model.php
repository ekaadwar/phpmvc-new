<?php 

class User_model
{
	private $table = 'user', 
			$db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getUser(){
		$query = "SELECT * FROM " . $this->table;
		$this->db->query($query);
		return $this->db->allResult();
	}
}