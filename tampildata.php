<table border="1">
	<tr>
		<td>NO</td>
		<td>NIM</td>
		<td>NAMA</td>
		<td>ALAMAT</td>
		<td>AKSI</td>
	</tr>
<?php
		require_once("konek.php");

		$sql = "SELECT * FROM siswa";
		$result = mysqli_query($conn, $sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        echo 	'
		        			<tr>
			        			<td>'. $row["siswa_id"] .'</td>
								<td>'. $row["siswa_nim"] .'</td>
								<td>'. $row["siswa_nama"] .'</td>
								<td>'. $row["siswa_alamat"] .'</td>
								<td>
									<input type="hidden" name="id" id="del_id" value="'. $row["siswa_id"] .'">
									<a href="menu_edit.php?id='.$row["siswa_id"].'">Edit</a>
									<a href="delete_db.php?id='.$row["siswa_id"].'">Hapus</a>
								</td>
		        			</tr>
		        		';
		    }
		} else {
		    echo "0 results";
		}
	?>

</table>