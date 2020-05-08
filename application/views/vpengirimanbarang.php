<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Pengirim</title>
</head>
<body>
	<center>
		<h1>Edit Data Pengirim</h1>
		<h3>Edit Data</h3>
	</center>
	<?php
		echo heading('Data Pengirim',3);
		$this->table->set_heading('Kode','Nama','Alamat','Kota','HP','Aksi');

		foreach($data_pengirim->result() as $row)
		{
			$this->table->add_row(
				$row->kd_pengirim,
				$row->nama_pengirim,
				$row->alamat_pengirim,
				$row->kota_pengirim,
				$row->hp_pengirim,

				anchor('pengirim/hapus/'.$row->kd_pengirim,'Hapus')
			);

		}
		echo $this->table->generate();
	?>
</body> -->
