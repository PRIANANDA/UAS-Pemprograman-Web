<div class ="justify-content">
<div class ="col-3"><b> Motor </b></div>
<a href    ="index.php?page=motor-add"><button class="btn btn-primary" type="button">Add</button></a>
</div>
</div>

<table class     ="table border border-secondary ">
	<thead class="thead">
		<tr>
			<th scope ="col"> No Motor </th>
			<th scope ="col"> Id Motor </th>
			<th scope ="col"> Nama Motor </th>
			<th scope ="col"> Bahan Bakar </th>
			<th scope ="col"> Perkiraan Harga Motor </th>
			<th scope ="col" width="9%"> </th>
		</tr>
	</thead>

	<body>
		<?php
		$que   	 = "SELECT * FROM motor";
		$select    = mysqli_query($con,$que);
          while($data= mysqli_fetch_array($select)) {
		?>

			<tr>
			     <th scope="row"><?php echo $data['no_motor']; ?></th>
				<th scope="row"><?php echo $data['id_motor']; ?></th>
			     <td><?php echo $data['nama_motor']; ?></td>
				<td><?php echo $data['bahan_bakar']; ?></td>
				<td><?php echo $data['harga_motor']; ?></td>
				<td>
				<a href="index.php?page=motor-edit&id=<?php echo $data['id_motor']; ?>"><button class="btn btn-outline-danger" type="button"> Edit </button></a>
		          <a href="index.php?page=motor-delete&id=<?php echo $data['id_motor']; ?>"><button class="btn btn-warning" type="button"> Hapus </button></a>
				</td>
			</tr>
		<?php } 
		?>
	</tbody>
</table>