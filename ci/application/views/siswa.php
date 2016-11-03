<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

Selamat Datang : <?=$this->user->nama_user?>
<br>
Data Siswa:

<a href="<?=site_url('siswa/form')?>">Tambah Siswa</a>

<a href="<?=site_url('login/aksi_logout')?>">Log Out</a>
<table border="1">
	<thead>
		<tr>
			<td>
			  <b>ID</b>
			</td>
			<td>
			  <b>nama</b>
			</td>
			<td>
				<b>alamat</b>
			</td>
			<td>
				<b>aksi</b>
			</td>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($siswa as $key => $value): ?>
			<tr>
				<td>
					<?=$value->id?>
				</td>
				<td>
					<?=$value->nama?>
				</td>
				<td>
					<?=$value->alamat?>
				</td>
				<td>
					<a href="<?=site_url('siswa/form_update/'.$value->id)?>">
						update
					</a>
				</td>
			</tr>	
		<?php endforeach ?>
		
	</tbody>
</table>
<?=$paging?>
</body>
</html>