<div class ="justify-content">
<div class ="col-3"><b> Tambah Nama Motor </b></div>
</div>

<form action ="index.php?page=motor-add" method="post" enctype="multipart/form-data">
	
<table class ="table-sm btn btn-secondary">
	<tr> 
		<td width       ="10%"> Nama Motor </td>
		<td><input class="form-control" type="text" name="nama"></td>
		</tr>
		<tr> 
		<td></td>
		<td><input class="btn btn-primary" type="submit" name="submit" value="submit"></td>
	</tr>
</table>
</form>    

<?php
if(isset($_POST['submit'])) {
	$nama   = $_POST['nama'];
     $reset  = "alter table motor AUTO_INCREMENT = 1";
	$query  = mysqli_query($con,$reset);
     $result = mysqli_query($con, "INSERT INTO motor (nama_motor) VALUES ('$nama')");
	header("Location: index.php?page=motor");
}
?>
