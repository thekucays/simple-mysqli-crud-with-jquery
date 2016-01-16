<?php
	echo '
	<form method="GET" action="insert_db.php">
		<table>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim" id="nim"></td>
			</tr>
			<tr>
				<td>NAMA</td>
				<td>:</td>
				<td><input type="text" name="nama" id="nama"></td>
			</tr>
			<tr>
				<td>ALAMAT</td>
				<td>:</td>
				<td><textarea name="alamat" id="alamat" cols="40" rows="10"></textarea></td>
			</tr>
			<tr>
				<td colspan="2">
					<button class"btnAdd">Submit</button>
				</td>
			</tr>
		</table>
	</form>
	';
?>