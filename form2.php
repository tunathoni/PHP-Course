<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="act2.php">
		<table border="0">
			<?php  
			for ($i = 0; $i < 10; $i++) {
				?>
				<tr>
					<td>
						<label>
							Input Nilai
						</label>
					</td>
					<td>
						<input type="text" name="nilai[]">			
					</td>
				</tr>
				<?php
			}
			?>
			<tr>
				<td>
					
				</td>
				<td>
					<input type="submit" value="Simpan">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>