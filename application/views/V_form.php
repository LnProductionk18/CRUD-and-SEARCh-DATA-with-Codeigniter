<!DOCTYPE html>
<html>
<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Input Data Pengirim</title>
</head>
<body>
	<center>
		<h1>Tambah Data Pengirim</h1>
		<h3>Tambah data baru</h3>
	</center>
	<center><?php echo anchor('C_pengirim/index','<button class=tmbh>Batal Tambah Data</button>'); ?></center>
	<form action="<?php echo site_url('C_pengirim/tambah_aksi'); ?>" method="post">
		
		<table style="margin:20px auto;">
			<tr>
				<td>Kode Pengirim</td>
				<td><input type="text" name="kd_pengirim" placeholder="no space"></td>
			</tr>
			<tr>
				<td>Nama Pengirim</td>
				<td><input type="text" name="nama_pengirim"></td>
			</tr>
			<tr>
				<td>Alamat Pengirim</td>
				<td><input type="text" name="alamat_pengirim"></td>
			</tr>
			<tr>
				<td>Kota Pengirim</td>
				<td><input type="text" name="kota_pengirim"></td>
			</tr>
			<tr>
				<td>HP Pengirim</td>
				<td><input type="text" name="hp_pengirim"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Kirim"></td>
			</tr>
		</table>
	</form>	
</body>
</html>