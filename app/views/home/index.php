<div class="jumbotron">
	<div class="container">
		<h1 class="display-4">Selamat datang di website Saya!</h1>
	  <?php foreach ($data['user'] as $user): ?>
			<p class="lead">Hai, nama saya <?= $user['nama']; ?>.</p>
		<?php endforeach ?>
	  <hr class="my-4">
	  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
	  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
	</div>
</div>