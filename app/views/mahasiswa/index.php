<div class="container mt-3">
	<div class="row">
		<div class="col-md-6">
			<h2>Daftar Mahasiswa</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<ul class="list-group">
				<?php foreach ($data['mahasiswa'] as $mahasiswa): ?>
					<li class="list-group-item"><?= $mahasiswa['nama']; ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>