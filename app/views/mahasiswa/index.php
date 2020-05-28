<div class="container mt-3">
	<div class="row mt-3">
		<div class="col-md-6">
			<h2>Daftar Mahasiswa</h2>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col-md-6">
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#inputData">
			  Tambah Data Mahasiswa
			</button>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col-md-6">
			<?php Flasher::flash(); ?>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col-md-6">
			<ul class="list-group">
				<?php foreach ($data['mahasiswa'] as $mahasiswa): ?>
					<li class="list-group-item">
						<?= $mahasiswa['nama']; ?>
						<a href="<?= BASE_URL; ?>/mahasiswa/detail/<?= $mahasiswa['id']; ?>" class="badge badge-primary float-right ml-1">Detail</a>
						<a href="<?= BASE_URL; ?>/mahasiswa/hapus/<?= $mahasiswa['id']; ?>" class="badge badge-danger float-right ml-1" onclick='return confirm("Yakin?")'>Hapus</a>
						<a href="<?= BASE_URL; ?>/mahasiswa/ubah/<?= $mahasiswa['id']; ?>" class="badge badge-success float-right ml-1 tombolUbahData" data-toggle="modal" data-target="#inputData" data-id="<?= $mahasiswa['id']; ?>">Ubah</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="inputData" tabindex="-1" role="dialog" aria-labelledby="inputDataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="inputDataLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= BASE_URL; ?>/mahasiswa/tambah">
        	<input type="hidden" name="id" id="id">
        	<div class="form-group">
				    <label for="name">Nama</label>
				    <input type="text" class="form-control" id="name" name="nama">
				  </div>
				  <div class="form-group">
				    <label for="email">Email</label>
				    <input type="email" class="form-control" id="email" name="email">
				  </div>
				  <div class="form-group">
				    <label for="nbp">No. BP</label>
				    <input type="text" class="form-control" id="nbp" name="nbp">
				  </div>
				  <div class="form-group">
				    <label for="jurusan">Jurusan</label>
				    <select class="form-control" id="jurusan" name="jurusan">
				      <option></option>
				      <?php 
				     	$jurusan = 	[
				     								'Kimia', 'Biologi', 'Matematika', 'Fisika',
				     								'Sistem Informasi', 'Sistem Komputer',
				     								'Teknik Informatika', 'Teknik Elektro', 'Teknik Mesin', 'Teknik Sipil', 'Teknik Arsitektur'
				     							];
							$fakultas = [
														'Matematika dan Ilmu Pengetahuan Alam',
														'Teknologi Informasi',
														'Teknik'
													];
							$countJur = count($jurusan);
							
							$countFak = count($fakultas);
				      for ($i=0; $i < $countJur; $i++) { 
				      	echo "<option value='$jurusan[$i]'>$jurusan[$i]</option>";
				      }
				      ?>
				    </select>
				  </div>
				  <div class="form-group">
				    <label for="fakultas">Fakultas</label>
				    <select class="form-control" id="fakultas" name="fakultas">
				      <option></option>
				      <?php 
				      for ($i=0; $i < $countFak; $i++) { 
				      	echo "<option value='$fakultas[$i]'>$fakultas[$i]</option>";
				      }
				      ?>
				    </select>
				  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
      </div>
    </div>
  </div>
</div>