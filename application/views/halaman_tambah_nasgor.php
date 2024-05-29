<!DOCTYPE html>
<html>
<head>
	<title>Halaman Tambah Penjualan</title>
</head>
<body>
	<h3>Halaman Tambah Pesanan</h3>
	<form action="<?php echo base_url('home/fungsiTambah') ?>" method="post">
	<table>
		<tr>
			<td>Kode Admin</td>
			<td>:</td>
			<td><input type="text" name="kdadmin"></td>
		</tr>
		<tr>
			<td>Nama Admin</td>
			<td>:</td>
			<td><input type="text" name="nmadmin"></td>
		</tr>
		<tr>
			<td>NoTelp</td>
			<td>:</td>
			<td><input type="text" name="notelp"></td>
		</tr>
		<tr>
			<td colspan="3"><button type="submit">Tambah Pesanan</button></td>
		</tr>
	</table>
	</form>
</body>
</html>