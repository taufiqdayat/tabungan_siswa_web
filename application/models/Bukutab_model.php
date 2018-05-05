<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bukutab_model extends CI_Model {

	function bukusiswa($nis)
	{
		$this->db->where('nis_siswa', $nis);
		return $this->db->get('nabung')->result();
	}

	function masuk($nis)
	{
		$this->db->select('SUM(nominal_nabung) as total');
		$this->db->from('nabung');
		$this->db->where(array('nis_siswa'=>$nis, 'keterangan'=>'setor'));
		return $this->db->get()->row()->total;

	}

	function keluar($nis)
	{
		$this->db->select('SUM(nominal_nabung) as total');
		$this->db->from('nabung');
		$this->db->where(array('nis_siswa'=>$nis, 'keterangan'=>'tarik'));
		return $this->db->get()->row()->total;
	}

	function cek($data)
	{
		$query = $this->db->get_where('siswa', $data);
		return $query->row();
	}

}

/* End of file m_bukutab.php */
/* Location: ./application/models/m_bukutab.php */