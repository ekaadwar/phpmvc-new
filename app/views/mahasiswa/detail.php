<div class="container">
	<div class="row mt-3">
	  <div class="col-sm-6">
	    <div class="card card border-primary mb-3">
	      <div class="card-header">
	      	<h5 class="card-title"><?= $data['mahasiswa']['nama']; ?></h5>
			    <h6 class="card-subtitle mb-2 text-muted"><?= $data['mahasiswa']['email']; ?></h6>
	    	</div>
	      <div class="card-body text-primary">
			    <p class="card-text"><?= $data['mahasiswa']['nbp']; ?></p>
			    <p class="card-text">Jurusan <?= $data['mahasiswa']['jurusan']; ?></p>
			    <p class="card-text">Fakultas <?= $data['mahasiswa']['fakultas']; ?></p>
			    <a href="<?= BASE_URL; ?>/mahasiswa" class="card-link badge badge-primary float-right">Kembali</a>
	      </div>
	    </div>
	  </div>
	</div>
</div>
