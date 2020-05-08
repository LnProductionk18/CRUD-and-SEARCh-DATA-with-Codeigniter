<!DOCTYPE html>
<html>
<head>
	<title>Input Data Pengirim</title>
</head>
<body>
	<center>
		<h1>Tambah Data Pengirim</h1>
		<h3>Tambah data baru</h3>
	</center>
	<?php
echo heading('Input Data Pengirim',3);
echo form_open('pengirim/terima');
echo "Kode Pengirim ".form_input('kd_pengirim')."<br>";
echo "Nama Pengirim ".form_input('nama_pengirim')."<br>";
echo "Alamat Pengirim  ".form_input('alamat_pengirim')."<br>";
echo "Kota Pengirim  ".form_input('kota_pengirim')."<br>";
echo "HP Pengirim  ".form_input('hp_pengirim')."<br>";
echo form_submit('mysubmit','Kirim');
echo form_close();
?>
</body>
</html>