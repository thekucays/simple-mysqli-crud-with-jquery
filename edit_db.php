<?php

	require_once("konek.php");

	$id = $_GET['id'];
	$nama = $_GET['nama'];
	$nim = $_GET['nim'];
	$alamat = $_GET['alamat'];

	$sql_edit = "UPDATE siswa SET siswa_nim='$nim', siswa_nama='$nama', siswa_alamat='$alamat'  WHERE siswa_id=$id";
	$hapus = mysqli_query($conn, $sql_edit);

	if($hapus){
		header("Location: index.php?pesan=edit");
	}

?>