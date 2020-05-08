<!DOCTYPE html>
<html>
<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Pengiriman Barang</title>
</head>
<body>

	<div>
		<center><?php echo anchor('C_pengirim/tambah','<button>+ Tambah Data pengirim</button>'); ?></center>
		<br>
		<center><?php echo anchor('C_pengirim/dropall','<button>** Hapus Seluruh Data **</button>'); ?></center>
		<br>
		<center><?php echo anchor('C_pengirim','<button>** Refresh **</button>'); ?></center>
		<br>
		<center>
			<?php echo form_open('C_pengirim') ?>
				<input type="text" name="keyword" placeholder="search">
				<input type="submit" name="search_submit" value="Cari">
			<?php echo form_close() ?>
		</center>

		<table style="margin:20px auto;" border="1">
				<tr>
					<center>
						<th class="no"><center>No</center></th>
						<th class="nmalmpek"><center>Kode Pengirim</center></th>
						<th class="nmalmpek"><center>Nama Pengirim</center></th>
						<th class="nmalmpek"><center>Alamat Pengirim</center></th>
						<th class="nmalmpek"><center>Kota Pengirim</center></th>
						<th class="nmalmpek"><center>HP Pengirim</center></th>
						<th class="act"><center>Aksi</center></th>
					</center>
				</tr>
			<?php 
				$no = 1;
					foreach($pengirim as $p)
				{ 
			?>
				<tr>
					<td><center><?php echo $no++ ?></center></td>
					<td><center><?php echo $p->kd_pengirim ?></center></td>
					<td><center><?php echo $p->nama_pengirim ?></center></td>
					<td><center><?php echo $p->alamat_pengirim ?></center></td>
					<td><center><?php echo $p->kota_pengirim ?></center></td>
					<td><center><?php echo $p->hp_pengirim ?></center></td>
					<td>
					      <?php echo "<center>". anchor('C_pengirim/edit/'.$p->kd_pengirim,'<button>Edit</button>'); ?>
		                  <?php echo anchor('C_pengirim/hapus/'.$p->kd_pengirim,'<button>Hapus</button>')."</center>"; ?>
					</td>
				</tr>
			<?php 
				} 
			?>
	</table>
	</div>
</body>
</html>