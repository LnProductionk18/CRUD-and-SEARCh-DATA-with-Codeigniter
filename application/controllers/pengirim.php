<?php
class Pengirim extends CI_Controller
{
	  // constructor
  	public function __construct() 
  	{
     	parent::__construct();
  	}

	function index()
	{
		$this->load->model('mpengirimanbarang');
		$data['data_pengirim']=$this->mpengirimanbarang->getPengirimanBarang();
		$this->load->view('vpengirimanbarang',$data);
		echo anchor('pengirim/tambah','Tambah Data pengirim').br(1);
	}

	function tambah()
	{
		$this->load->view('form_pengirim');
	}

	function terima()
	{
		$data = array ( 'kd_pengirim' => $_POST['kd_pengirim'], 'nama_pengirim' => $_POST['nama_pengirim'],
		'alamat_pengirim' => $_POST['alamat_pengirim'],'kota_pengirim' => $_POST['kota_pengirim'], 'hp_pengirim' => $_POST['hp_pengirim']);
		$this->load->model('mpengirimanbarang');
		$this->mpengirimanbarang->addPengirimanBarang($data);
		echo anchor('pengirim/tambah','Tambah Data Lagi?').br(1);
		echo anchor('pengirim','Ke Halaman Utama');
	}

	function hapus($syarat)
	{
		$data['kd_pengirim'] = $syarat;
		$this->load->model('mpengirimanbarang');
		$this->mpengirimanbarang->deletePengirimanBarang($data);
		echo heading('Data Berhasil Dihapus',4);
		echo anchor('pengirim','Ke Halaman Utama');
	}

	function edit($syarat)
	{
		// $data['kd_pengirim'] = $syarat;
		// $this->load->model('mpengirimanbarang');
		// $this->mpengirimanbarang->deletePengirimanBarang($data);
		// echo heading('Data Berhasil Dihapus',4);
		// echo anchor('pengirim','Ke Halaman Utama');
		$this->load->view('edit');
		$data['kd_pengirim'] = $syarat;
		$this->load->model('mpengirimanbarang');

	}
}
?>
