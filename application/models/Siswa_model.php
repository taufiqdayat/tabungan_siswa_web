<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model {

	function ceknis($nis)
	{
		$this->db->where('nis_siswa', $nis);
		return $this->db->get('siswa')->result();
	}

	function all()
	{
		return $this->db->get('siswa')->result();
	}

	function store($simpan)
	{
		$this->db->insert('siswa', $simpan);
	}

	function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('siswa');
	}

	function edit($id)
	{
		$this->db->where('id', $this->db->escape_str($id));
		return $this->db->get('siswa')->row();
	}

	function update($ubah, $id)
	{
        $this->db->where('id', $id);
        $this->db->update('siswa', $ubah);
        return $id;
	}

	function updatepin($ubah, $id)
	{
        $this->db->where('nis_siswa', $id);
        $this->db->update('siswa', $ubah);
        return $id;
	}

	function count()
	{
		return $this->db->count_all('siswa');
	}


}