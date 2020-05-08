<?php  
	defined('BASEPATH') OR exit('NO direct script access allowed');
	class M_pengirim extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}

		function tampil_data()
		{
			return $this->db->get('pengirim');
		}

		function input_data($data,$table)
		{
			$this->db->insert($table,$data); 
		}

		function hapus_data($where,$table)
		{ 
			$this->db->where($where);
			$this->db->delete($table);
		}
		
		function edit_data($where,$table)
		{		
			return $this->db->get_where($table,$where);
		}

		function update_data($where,$data,$table)
		{
			$this->db->where($where);
			$this->db->update($table,$data);
		}	

		function bersihkan()
		{
			$hasil=$this->db->query("TRUNCATE TABLE pengirim");
			return $hasil;
		}


		public function get_product_keyword($keyword)
		{
			if ($keyword =="") 
			{
				$this->db->select('*');
				$this->db->from('pengirim');
				// $this->db->or_like('harga',$keyword);
				return $this->db->get()->result();
			}
			elseif ($keyword !="") 
			{

				$this->db->select('*');
				$this->db->from('pengirim');
				$this->db->like('kd_pengirim',$keyword);
				$this->db->or_like('nama_pengirim',$keyword);
				$this->db->or_like('alamat_pengirim',$keyword);
				$this->db->or_like('kota_pengirim',$keyword);
				$this->db->or_like('hp_pengirim',$keyword);
				// $this->db->or_like('harga',$keyword);
				return $this->db->get()->result();
			}
		}
	}
?>