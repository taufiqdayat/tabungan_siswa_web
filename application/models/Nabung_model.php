<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nabung_model extends CI_Model {

	function picksiswa($nis)
	{
		$this->db->where('nis_siswa', $nis);
		return $this->db->get('siswa')->result();
	}

	function save($simpan)
	{
		$this->db->insert('nabung', $simpan);
	}


}

/* End of file m_nabung.php */
/* Location: ./application/models/m_nabung.php */