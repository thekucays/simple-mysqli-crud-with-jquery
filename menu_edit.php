<?php
	require_once("konek.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="edit_db.php" method="GET">
		<?php
			$id = $_GET['id'];
			$sql = "SELECT * FROM siswa WHERE siswa_id = $id";
			$result = mysqli_query($conn, $sql);

			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        echo 	'
			        			<table>
									<tr>
										<td>NIM</td>
										<td>:</td>
										<td>
											<input type="hidden" name="id" id="id" value="'. $row["siswa_id"] .'">
											<input type="text" name="nim" id="nim" value="'. $row["siswa_nim"] .'">
										</td>
									</tr>
									<tr>
										<td>NAMA</td>
										<td>:</td>
										<td><input type="text" name="nama" id="nama" value="'. $row["siswa_nama"] .'"></td>
									</tr>
									<tr>
										<td>ALAMAT</td>
										<td>:</td> 
										<td><textarea name="alamat" id="alamat" cols="40" rows="10">'. $row["siswa_alamat"] .'</textarea></td>
									</tr>
									<tr>
										<td colspan="2">
											<input type="submit" value="submit" />
										</td>
									</tr>
								</table>	
			        		';
			    }
			} else {
			    echo "0 results";
			}
		?>
	</form>
</body>
</html>
