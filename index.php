<?php
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "hapus"){
			echo "<script>alert('berhasil hapus')</script>";	
		}
		else if($_GET['pesan'] == "edit"){
			echo "<script>alert('berhasil edit')</script>";	
		}
		else if($_GET['pesan'] == "tambah"){
			echo "<script>alert('berhasil tambah')</script>";	
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
		<script src="jquery/jquery.min.js"></script>
		<link href="jquery/jquery-ui.min.css" rel="stylesheet"/>
		<script src="jquery/jquery-ui.min.js"></script>
		<script>
				$.ajaxSetup({cache: false, async: false});
				$(document).ready(function(){
				    $(".tampildata").click(function(event){
				        console.log("The paragraph was clicked.");
				        event.preventDefault();

				        $.ajax({
				            url : "tampildata.php",
				            type : "POST",
				            success : function(msg){
				                $(".datacontainer").html(msg);
				            }
				        });
				    });

				    $(".tambahdata").click(function(event){
				    	console.log("tambah data");
				    	$.ajax({
				            url : "tambahdata.php",
				            type : "POST",
				            success : function(msg){
				                $(".dataAdd").html(msg);
				            }
				        });
				    });
				});
		</script>
</head>
<body>

<!--<a href="tambahdata.php">Tambah Data</a> -->
<button class="tambahdata">Tambah Data</button>

<br> <br> <br>
<button class="tampildata">Tampilkan Data</button>

<br><br><br>
<div class="dataAdd"></div>
<br><br><br>
<div class="datacontainer"></div>

</body>
</html>
