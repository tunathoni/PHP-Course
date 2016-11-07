<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?=site_url('siswa/act_upload')?>" method = "POST" enctype="multipart/form-data">
		<label>File</label>
		<input type="file" name="file_upload">
		<input type="submit" name="" value="Upload File">
	</form>
</body>
</html>