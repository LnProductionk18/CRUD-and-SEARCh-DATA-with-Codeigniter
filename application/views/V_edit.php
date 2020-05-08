<!DOCTYPE html>
<html>
<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update Data Pengirim</title>
</head>
<body>
	<center><h1>Edit Data Pengirim</h1></center>
<center><?php echo anchor('C_pengirim/index','<button>Batal Update Data</button>'); ?></center>
	<?php foreach($pengirim as $p)
		{ 
	?>
			<form action="<?php echo site_url('C_pengirim/update'); ?>" method="post">
				<table style="margin:20px auto;">
					<tr>
						<td>Kode Pengirim</td>
						<td>
							<input type="hidden" name="kd_pengirim" value="<?php echo $p->kd_pengirim; ?>">
							<input type="text" value="<?php echo $p->kd_pengirim; ?>" disabled>
						</td>
					</tr>
					<tr>
						<td>Nama Pengirim</td>
						<td>
							<input type="text" name="nama_pengirim" value="<?php echo $p->nama_pengirim; ?>">
						</td>
					</tr>
					<tr>
						<td>Alamat Pengirim</td>
						<td><input type="text" name="alamat_pengirim" value="<?php echo $p->alamat_pengirim; ?>"></td>
					</tr>
					<tr>
						<td>Kota Pengirim</td>
						<td><input type="text" name="kota_pengirim" value="<?php echo $p->kota_pengirim; ?>"></td>
					</tr>
					<tr>
						<td>HP Pengirim</td>
						<td><input type="text" name="hp_pengirim" value="<?php echo $p->hp_pengirim; ?>"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="Kirim"></td>
					</tr>
				</table>
			</form>	
	<?php 
		} 
	?>
</body>
</html>