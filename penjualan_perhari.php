<div class ="justify-content">
<div class ="col-3"><b> Penjualan Perhari </b></div>
</div>
</div>

<table class     ="table border border-secondary">
	<thead class="thead-">
		<tr>
               <th scope ="col"> Id Penjualan Perhari </th>
			<th scope ="col"> Penjualan Motor Perhari </th>
			<th scope ="col"> Jumlah Motor Terjual </th>
               <th scope ="col"> Harga Motor </th>
			<th scope ="col" width ="9%"> Aksi </th>
		</tr>
	</thead>

	<body>
		<?php
		$que       = "SELECT * FROM penjualan_perhari";
		$select    = mysqli_query($con,$que);
          while($data= mysqli_fetch_array($select)){
          ?>

          <tr>
               <th scope="row"><?php echo $data['id_penjualan_perhari']; ?></th>
		     <td><?php echo $data['penjualan_motor_perhari']; ?></td>
			<td><?php echo $data['jumlah_motor_terjual']; ?></td>
               <td><?php echo $data['harga_motor']; ?></td>
			<td>
			<a href="index.php?page=penjualan_perhari-edit&id=<?php echo $data['id_penjualan_perhari']; ?>"><button class="btn btn-outline-danger" type="button"> Edit </button></a>
			<a href="index.php?page=penjualan_perhari-delete&id=<?php echo $data['id_penjualan_perhari']; ?>"><button class="btn btn-warning" type="button"> Hapus </button></a>
			</td>
			</tr>
		<?php } 
		?>
	</body>
</table>