<?php
if(isset($_REQUEST['id']))
{ 
     $id     = $_REQUEST['id'];
     $result = mysqli_query($con, "SELECT * FROM motor WHERE id_motor = $id");

	while($data  = mysqli_fetch_array($result)) {
		$nama   = $data['nama_motor'];
		$id 	   = $data['id_motor'];
	}
     
     ?>
     <div class   ="justify-content">
     <div class   ="col-3"><b> Edit Motor </b></div>
	</div>

	<form action ="index.php?page=motor-edit" method="post" enctype="multipart/form-data">
	<table class ="table-sm btn btn-secondary">
	<tr> 
		<td width   ="10%"> Nama Motor </td>
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
     $result = mysqli_query($con, "UPDATE motor SET nama_motor='$nama' WHERE id_motor=$id");
     header("Location: index.php?page=motor");
}
?>