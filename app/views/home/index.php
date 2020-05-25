<h1>Selamat datang di website Saya!</h1>
<?php foreach ($data['user'] as $user): ?>
	<p>Hai, nama saya <?= $user['nama']; ?>.</p>	
<?php endforeach ?>