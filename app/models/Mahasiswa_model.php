<?php 

class Mahasiswa_model
{
	private $table = 'mahasiswa', 
			$db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getData(){
		$query = "SELECT * FROM " . $this->table;
		$this->db->query($query);
		return $this->db->allResult();
	}
}