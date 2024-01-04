<?php
	$id     = $_GET['id'];
	$result = mysqli_query($con, "DELETE FROM penjualan_perminggu WHERE id_penjualan_perminggu =$id");
	header("Location:index.php?page=penjualan_perminggu");
?>