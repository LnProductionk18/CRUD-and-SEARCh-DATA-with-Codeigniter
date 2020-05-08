<?php
	Class Mpengirimanbarang extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
	}

	function getPengirimanBarang()
	{
		return $query = $this->db->query("SELECT * FROM pengirim");
	}

	function addPengirimanBarang($data)
	{
		$this->db->insert('pengirim',$data);
	}

	function deletePengirimanBarang($data)
	{
		$this->db->where('kd_pengirim',$data['kd_pengirim']);
		$this->db->delete('pengirim');
	}

	function editPengirimanBarang($data)
	{
		$this->db->where('kd_pengirim',$data['kd_pengirim']);
		$this->db->delete('pengirim');
	}
}
?>
