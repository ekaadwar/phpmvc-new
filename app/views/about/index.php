<div class="container text-center">
	<div class="row">
		<div class="col-md-6 offset-md-3 mt-3">
			<h2>About Me</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 offset-md-3 mt-3">
			<img src="<?= BASE_URL; ?>/img/eka.jpg" class="rounded-circle shadow" width="200">
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 offset-md-3 mt-3">
			<?php foreach ($data['user'] as $user): ?>
				<p>Hello, nama saya <?= $user['nama']; ?>. Saya adalah lulusan <?= $user['jurusan'] . ', ' . $user['kampus'];?>. Saat ini saya bekerja sebagai <?= $user['pekerjaan']; ?>.</p>
			<?php endforeach ?>
		</div>
	</div>
</div>