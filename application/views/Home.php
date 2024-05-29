<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Halaman Home</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Data Penjualan Nasi Goreng Delivery</h1>

	<a href="<?php echo base_url('/home/halaman_tambah') ?>">Tambah pesanan</a>
	<br>
	<br>
	<table border="1">
		<tr>
			<td>No</td>
			<td>Kode Admin</td>
			<td>Nama Admin</td>
			<td>NoTelp</td>
			<td>Password</td>
		</tr>
		<?php 
			$count = 0;
			foreach ($queryAllNasigoreng as $row) {
				$count = $count + 1;
		 ?>
		<tr>
			<td><?php echo $count ?></td>
			<td><?php echo $row->kdadmin ?></td>
			<td><?php echo $row->nmadmin ?></td>
			<td><?php echo $row->Notelp ?></td>
            <td><?php echo $row->password ?></td>
			<td><a href="<?php echo base_url('/home/halaman_edit') ?>/<?php echo $row->kdadmin ?>">Edit</a> | <a href="<?php echo base_url('/home/fungsiDelete') ?>/<?php echo $row->kdadmin ?>">Delete</a></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>