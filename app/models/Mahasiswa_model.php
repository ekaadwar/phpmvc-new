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

	public function getDataById($id){
		$query = "SELECT * FROM " . $this->table . " WHERE id=:id";
		$this->db->query($query);
		$this->db->bind('id', $id);
		return $this->db->singleRes();
	}
}