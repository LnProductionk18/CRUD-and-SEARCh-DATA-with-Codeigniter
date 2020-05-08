<?php  
	defined('BASEPATH') OR exit('NO direct script access allowed');
	class C_pengirim extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('M_pengirim');
		}
		function index()
		{
			// $data['pengirim'] = $this->M_pengirim->tampil_data()->result();
			// $this->load->view('V_pengirim',$data);

			$keyword = $this->input->post('keyword');
			$data['pengirim']=$this->M_pengirim->get_product_keyword($keyword);
			$this->load->view('V_pengirim',$data);
		}

		function tambah()
		{
			$this->load->view('V_form');
		}

		function tambah_aksi()
		{
			$kd_pengirim 		= ($this->input->post("kd_pengirim"));
			$nama_pengirim 		= ($this->input->post("nama_pengirim"));
			$alamat_pengirim 	= ($this->input->post("alamat_pengirim"));
			$kota_pengirim 		= ($this->input->post("kota_pengirim"));
			$hp_pengirim 		= ($this->input->post("hp_pengirim"));
	 
			$data = array('kd_pengirim' => $kd_pengirim,
						  'nama_pengirim' => $nama_pengirim,
						  'alamat_pengirim' => $alamat_pengirim,
						  'kota_pengirim' => $kota_pengirim,
						  'hp_pengirim' => $hp_pengirim);
			$this->M_pengirim->input_data($data,'pengirim');
			echo heading('Data Berhasil Ditambahkan',4);
			echo anchor('C_pengirim','Ke Halaman Utama');
		}

		function hapus($kd_pengirim)
		{
			$where = array('kd_pengirim' => $kd_pengirim);
			$this->M_pengirim->hapus_data($where,'pengirim');
			echo heading('Data Berhasil Dihapus',4);
			echo anchor('C_pengirim','Ke Halaman Utama');
		}

		function edit($kd_pengirim)
		{
			$where = array('kd_pengirim' => $kd_pengirim);
			$data['pengirim'] = $this->M_pengirim->edit_data($where,'pengirim')->result();
			$this->load->view('v_edit',$data);
		}

		function update()
		{
			$kd_pengirim 		= ($this->input->post("kd_pengirim"));
			$nama_pengirim 		= ($this->input->post("nama_pengirim"));
			$alamat_pengirim 	= ($this->input->post("alamat_pengirim"));
			$kota_pengirim 		= ($this->input->post("kota_pengirim"));
			$hp_pengirim 		= ($this->input->post("hp_pengirim"));

			$data = array('kd_pengirim' => $kd_pengirim,
						  'nama_pengirim' => $nama_pengirim,
						  'alamat_pengirim' => $alamat_pengirim,
						  'kota_pengirim' => $kota_pengirim,
						  'hp_pengirim' => $hp_pengirim);

			$where = array(
				'kd_pengirim' => $kd_pengirim
			);

			$this->M_pengirim->update_data($where,$data,'pengirim');
			echo heading('Data Berhasil Diupdate',4);
			echo anchor('C_pengirim','Ke Halaman Utama');
		}

		function dropall()
		{
	
			$this->M_pengirim->bersihkan();
			echo heading('Semua Data Telah Dihapus',4);
			echo anchor('C_pengirim','Ke Halaman Utama');
		}
	}
?>