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

	public function addData($data){
		$query = 	"INSERT INTO " . $this->table . 
					" VALUES ('', :nama, :email, :nbp, :jurusan, :fakultas )";
		$this->db->query($query);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('nbp', $data['nbp']);
		$this->db->bind('jurusan', $data['jurusan']);
		$this->db->bind('fakultas', $data['fakultas']);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function deleteData($id){
		$query = "DELETE FROM " . $this->table . " WHERE id=:id";
		$this->db->query($query);
		$this->db->bind('id', $id);
		
		$this->db->execute();

		return $this->db->rowCount();
	}
}