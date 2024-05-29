_<!DOCTYPE html>
<html>
<head>
	<title>Halaman Edit Penjualan</title>
</head>
<body>
	<h3>Halaman Edit Penjualan</h3>
	<form action="<?php echo base_url('home/fungsiEdit') ?>" method="post">
	<table>
        <tr>
			<td>Kode Admin</td>
			<td>:</td>
			<td><input type="text" name="kdadmin" value="<?php echo $queryNasgorDetail->kdadmin ?>" readonly></td>
		<tr>
			<td colspan="3"><button type="submit">Update Data Penjualan</button></td>
		</tr>
	</table>
	</form>
</body>
</html>