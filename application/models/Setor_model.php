<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setor_model extends CI_Model {

	function alldata()
	{
		$this->db->order_by('tanggal_nabung', 'desc');
		$this->db->where('keterangan', 'setor');
		return  $this->db->get('nabung')->result();
	}

	function picksiswa($nis)
	{
		$this->db->where('nis_siswa', $nis);
		return $this->db->get('siswa')->result();
	}

	function save($simpan)
	{
		$this->db->insert('nabung', $simpan);
	}

	function edit($id)
	{
		$this->db->where('id_nabung', $this->db->escape_str($id));
		return $this->db->get('nabung')->row();
	}

	function update($ubah, $id)
	{
        $this->db->where('id_nabung', $id);
        $this->db->update('nabung', $ubah);
        return $id;
	}

	function delete($id)
	{
		$this->db->where('id_nabung', $id);
		$this->db->delete('nabung');
	}

	function count()
	{
		$this->db->like('keterangan', 'setor');
		$this->db->from('nabung');
		return $this->db->count_all_results();
	}

}

/* End of file m_setor.php */
/* Location: ./application/models/m_setor.php */