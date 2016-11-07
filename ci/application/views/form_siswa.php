<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php echo $this->session->flashdata('alert_msg'); ?>

	<form action="<?=site_url('siswa/actSave')?>" method="POST">
		<?php for($i = 0; $i < 3; $i++){ ?>
			<label>Nama</label>
			<input type="text" name="nama[]">
			<label>Alamat</label>
			<input type="text" name="alamat[]">
			<br>
		<?php } ?>
		

		<input type="submit" name="" value="Simpan">
	</form>
</body>
</html>