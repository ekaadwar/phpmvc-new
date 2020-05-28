$(function(){

	$('.tombolTambahData').on('click', function(){
		$('#inputDataLabel').html('Tambah Data Mahasiswa');
		$('.modal-footer button[type=submit]').html('Tambah');
	});


	$('.tombolUbahData').on('click', function(){
		$('#inputDataLabel').html('Ubah Data Mahasiswa');
		$('.modal-footer button[type=submit]').html('Ubah');
		$('.modal-body form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/ubah');

		const id = $(this).data('id');

		$.ajax({
			url: 'http://localhost/phpmvc/public/mahasiswa/getUbah',
			data: {id : id},
			method : 'post',
			dataType : 'json',
			success: function(data){
				$('#name').val(data.nama);
				$('#email').val(data.email);
				$('#nbp').val(data.nbp);
				$('#jurusan').val(data.jurusan);
				$('#fakultas').val(data.fakultas);
				$('#id').val(data.id);
			}
		});

	});

});