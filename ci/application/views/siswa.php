<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
Data Siswa:

<table border="1">
	<thead>
		<tr>
			<td>
			  <b>ID</b>
			</td>
			<td>
			  <b>title</b>
			</td>
			<td>
				<b>recipientList</b>
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
					<?=$value->title?>
				</td>
				<td>
					<?=$value->recipientList?>
				</td>
			</tr>	
		<?php endforeach ?>
		
	</tbody>
</table>
<?=$paging?>
</body>
</html>