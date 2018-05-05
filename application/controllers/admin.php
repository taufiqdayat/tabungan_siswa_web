<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['all'] = $this->admin_m->all() ;
		$this->data['subview'] = "admin/index";
		$this->load->view('admin_main', $this->data);
	}

	public function create()
	{
		if ($this->data['admin_info']->level=='author') {
			$this->data['subview'] = "admin/add";
			$this->load->view('admin_main', $this->data);	
		}
		else 
		{
			redirect('Admin','refresh');
		}
		
	}

	public function store()
	{
		$simpan = array (
					'nama_admin' 		=> $this->input->post('nama'),
					'username_admin' 	=> $this->input->post('username'),
					'password_admin' 	=> $this->hash($this->input->post('password')),
					'level' 			=> $this->input->post('level'),
			);

		$user =  $this->input->post('username');

		$hasil = $this->admin_m->cekusername($user);
		if (count($hasil)) {

			echo "<script>alert('username sudah ada')</script>";
			redirect('admin', 'refresh');
		}
		else
		{
			$this->admin_m->store($simpan);
			redirect('admin');
		}
	}

	public function edit($id = null)
	{
		if ($id) {
			if($this->admin_m->edit($id)==null)
			{
				redirect('admin','refresh');
			}

			else
			{
				$this->data['data_admin'] = $this->admin_m->edit($id);
				$this->data['subview'] = 'admin/edit';
				$this->load->view('admin_main', $this->data);
			}
			
		}
	}

	public function update($id)
	{

		if ($this->input->post('password')=='') {
			$ubah = array (
					'nama_admin' => $this->input->post('nama'),
					'username_admin' => $this->input->post('username'),
					'level' => $this->input->post('level'),
					
			);

			$this->admin_m->updatepass($ubah, $id);
			redirect('admin','refresh');
		}
		else
		{
		$ubah = array (
					'nama_admin' => $this->input->post('nama'),
					'username_admin' => $this->input->post('username'),
					'level' => $this->input->post('level'),
					'password_admin' => $this->hash($this->input->post('password'))
			);
			$this->admin_m->updatepass($ubah, $id);
			redirect('admin','refresh');
		}

		
	}

	public function delete()
	{
		$id = $this->input->post('id');
		$this->admin_m->delete($id);
		redirect('admin', 'refresh');
	}


	public function changepass()
	{
		$this->data['subview'] = 'admin/ganti';
		$this->load->view('admin_main', $this->data);
	}

	public function updatepass()
	{
		$id = $this->data['admin_info']->id_admin;
		$ubah = array (
					'password_admin' => $this->hash($this->input->post('passwordnew')),
			);

		$this->admin_m->updatepass($ubah, $id);
		redirect('admin','refresh');
	}

	public function hash($string)
	{
		return hash('md5', $string);
	}

}