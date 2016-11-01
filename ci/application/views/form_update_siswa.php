<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="<?=site_url('siswa/actSaveUpdate')?>" method="GET">
		<label>Nama</label>
		<input type="text" name="nama" value="<?=$siswa->nama?>">
		<label>Alamat</label>
		<input type="text" name="alamat" value="<?=$siswa->alamat?>">
		<input type="hidden" name="id" value="<?=$siswa->id?>">

		<input type="submit" name="" value="Simpan">
	</form>
</body>
</html>