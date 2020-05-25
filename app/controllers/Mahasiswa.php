<?php 

class Mahasiswa extends Controller
{
	public function index()
	{
		$data['title'] = 'Daftar Mahasiswa';
		$data['mahasiswa'] = $this->model('Mahasiswa_model')->getData();

		$this->view('templates/header', $data);
		$this->view('mahasiswa/index', $data);
		$this->view('templates/footer');
	}

	public function detail($id)
	{
		$data['title'] = 'Daftar Mahasiswa';
		$data['mahasiswa'] = $this->model('Mahasiswa_model')->getDataById($id);

		$this->view('templates/header', $data);
		$this->view('mahasiswa/detail', $data);
		$this->view('templates/footer');
	}
}