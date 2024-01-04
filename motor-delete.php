<?php
	$id     = $_GET['id'];
	$result = mysqli_query($con, "DELETE FROM motor WHERE id_motor=$id");
	header("Location:index.php?page=motor");
?>