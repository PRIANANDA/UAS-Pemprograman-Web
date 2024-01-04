<?php
	$id 	   = $_GET['id'];
	$result = mysqli_query($con, "DELETE FROM penjualan_perhari WHERE id_penjualan_perhari =$id");
	header("Location:index.php?page=penjualan_perhari");
?>