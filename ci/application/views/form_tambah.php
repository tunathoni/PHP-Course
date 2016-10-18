<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<ul>
		<li>
			<a href="<?=site_url('welcome')?>">Home</a>
		</li>
		<li>
			<a href="<?=site_url('welcome/formtambah')?>">Tambah</a>
		</li>
	</ul>
	<form action="<?=site_url('welcome/aksiSimpan')?>" method="POST">
		<label>Nama</label>
		<input type="text" name="nama">
		
		<label>Alamat</label>
		<input type="text" name="alamat">
		
		<input type="submit" value="Simpan">
	</form>

	<?=base_url();?>
	<br>
	<?=site_url();?>
</body>
</html>