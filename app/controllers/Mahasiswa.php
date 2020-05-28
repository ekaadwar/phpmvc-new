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

	public function tambah()
	{
		if($this->model('Mahasiswa_model')->addData($_POST) > 0)
		{
			Flasher::setFlasher('ditambahkan', 'berhasil', 'success');
			header('Location: ' . BASE_URL . '/mahasiswa' );
			exit;
		} else {
			Flasher::setFlasher('ditambahkan', 'gagal', 'danger');
			header('Location: ' . BASE_URL . '/mahasiswa' );
			exit;
		}
	}

	public function hapus($id)
	{
		if($this->model('Mahasiswa_model')->deleteData($id) > 0)
		{
			Flasher::setFlasher('dihapus', 'berhasil', 'success');
			header('Location: ' . BASE_URL . '/mahasiswa' );
			exit;
		} else {
			Flasher::setFlasher('dihapus', 'gagal', 'danger');
			header('Location: ' . BASE_URL . '/mahasiswa' );
			exit;
		}
	}
}