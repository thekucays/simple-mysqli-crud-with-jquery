<?php

	require_once("konek.php");

	$id = $_GET['id'];
	$sql_delete = "DELETE FROM `kampus`.`siswa` WHERE `siswa`.`siswa_id` = $id";
	$hapus = mysqli_query($conn, $sql_delete);

	if($hapus){
		header("Location: index.php?pesan=hapus");
	}
?>