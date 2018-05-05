<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

	
	function cek($data)
	{
		$query = $this->db->get_where('admin', $data);
		return $query->row();
	}

	function get($id)
	{
		$this->db->where('id_admin', $id);
		return $this->db->get('admin')->row();
	}
}