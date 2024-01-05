<?php
if(isset($_REQUEST['id']))
{ 
     $id     = $_REQUEST['id'];
     $result = mysqli_query($con, "SELECT * FROM penjualan_perminggu WHERE id_penjualan_perminggu = $id");

	while ($data = mysqli_fetch_array($result)) {
		$nama   = $data['penjualan_motor_perminggu'];
		$id 	   = $data['id_penjualan_perminggu'];
	}
     
     ?>
     <div class  ="justify-content">
     <div class  ="col-3"><b> Edit Penjualan Perhari </b></div>
	</div>

	<form action="index.php?page=penjualan_perminggu-edit" method="post" enctype="multipart/form-data">
	<table class="table-sm btn btn-secondary">
	<tr> 
		<td width  ="10%"> Penjualan </td>
		<td>
		<input class=" form-control" type="text" name="nama" value="<?php echo $nama;?>">
		<input type ="hidden" name="id" value="<?php echo $id; ?>">
	     </td>
		</tr>
		<tr> 
		<td></td>
		<td><input class="btn btn-primary" type="submit" name="submit" value="submit"></td>
	</tr>
</table>
</form>  

<?php 
} ?>

<?php
if(isset($_POST['submit'])) {   
     $id	   = $_POST['id'];
	$nama   = $_POST['nama'];
     $result = mysqli_query($con, "UPDATE penjualan_perminggu SET penjualan_motor_perminggu ='$nama' WHERE id_penjualan_perminggu=$id");
     header("Location: index.php?page=penjualan_perminggu");
}
?>