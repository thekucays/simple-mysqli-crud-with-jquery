<?php
	require_once("konek.php");

	$nama = $_GET['nama'];
	$nim = $_GET['nim'];
	$alamat = $_GET['alamat'];

	$sql_insert = "INSERT INTO siswa VALUES (NULL, '$nim', '$nama', '$alamat')";
	$insert = mysqli_query($conn, $sql_insert);	

	if($insert){
		//echo("<script>alert('data berhasil ditambah')");
		header("Location: index.php?pesan=tambah");
	}
?>