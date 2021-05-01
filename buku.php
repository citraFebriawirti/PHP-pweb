<!DOCTYPE html>
<html>
<head>
	<title>Halaman index</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
  	</script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
 	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
	</script>
</head>
<body>
	<div class="container">
		<!--Navigation Bar -->
		<?php include 'head.php'; ?>
		<!-- End of Navigation Bar -->
		<br>	
		<!-- content -->
		<table class="table table-bordered">
		  <thead>
		    <tr>
		      <th scope="col">Nomor</th>
		      <th scope="col">nama buku</th>
		      <th scope="col">penulis</th>
		      <th scope="col">penerbit</th>
		      <th scope="col">tanggal terbit</th>
		      <th scope="col">stock</th>
		    </tr>
		  </thead>
		  <tbody>
		  <?php 
			include 'koneksi.php';
			$query = mysqli_query ($koneksi,"SELECT * FROM buku");
			while ($data = mysqli_fetch_assoc($query)) {
			 ?>
		    <tr>
		    	<td><?php echo $data['id']; ?></td>
		    	<td><?php echo $data['nama_buku']; ?></td>
		    	<td><?php echo $data['penulis']; ?></td>
		    	<td><?php echo $data['penerbit']; ?></td>
		    	<td><?php echo $data['tanggal_terbit']; ?></td>
		    	<td><?php echo $data['stok']; ?></td>
		    </tr>
		<?php } ?>
		  </tbody>
		</table>
		<!--End of Content-->
	</div>
</body>
</html>