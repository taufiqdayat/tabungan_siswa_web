<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	function all()
	{
		return $this->db->get('admin')->result();
	}

	function cekusername($user)
	{
		$this->db->where('username_admin', $user);
		return $this->db->get('admin')->result();
	}

	function store($simpan)
	{
		$this->db->insert('admin', $simpan);
	}

	function edit($id)
	{
		$this->db->where('id_admin', $this->db->escape_str($id));
		return $this->db->get('admin')->row();
	}

	function delete($id)
	{
		$this->db->where('id_admin', $id);
		$this->db->delete('admin');
	}

	function updatepass($ubah, $id)
	{
        $this->db->where('id_admin', $id);
        $this->db->update('admin', $ubah);
        return $id;
	}

	function count()
	{
		return $this->db->count_all('admin');
	}

}

/* End of file m_admin.php */
/* Location: ./application/models/m_admin.php */