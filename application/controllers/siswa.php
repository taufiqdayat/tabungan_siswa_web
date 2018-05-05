<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('loggedin')==FALSE) 
		{
			redirect('auth','refresh');
		}
	}

	public function index()
	{
		$this->data['semua'] = $this->siswa_m->all();

		$this->data['subview'] = 'siswa/data_siswa';
		$this->data['javasc'] = 'js/datatable';
		$this->load->view('admin_main', $this->data);
	}

	public function create()
	{
		$this->data['subview'] = 'siswa/tambah_siswa';
		$this->data['javasc'] = 'js/datetime';
		$this->load->view('admin_main', $this->data);
	}

	public function store()
	{
		$str = $this->input->post('tgl');
		$arr = explode("-" , $str);
		$fixstr = array_slice($arr,0);
			
		$simpan = array (
					'nis_siswa' => $this->input->post('nis'),
					'nama_siswa' => $this->input->post('nama'),
					'tgl_lahir_siswa' => $fixstr[2] ."-" .$fixstr[1] ."-" .$fixstr[0],
					'jk_siswa' => $this->input->post('jk')
			);

		$nis =  $this->input->post('nis');

		$hasil = $this->siswa_m->ceknis($nis);
		if (count($hasil)) {

			echo "<script>alert('nis sudah ada')</script>";
			redirect('siswa', 'refresh');
		}
		else
		{
			$this->siswa_m->store($simpan);
			redirect('siswa');
		}

		
		


	}

	public function edit($id = null)
	{
		if ($id)
		{ 
			if($this->siswa_m->edit($id)==null)
			{
				redirect('siswa','refresh');
			}

			else
			{
				$this->data['data_siswa'] = $this->siswa_m->edit($id);
				$this->data['subview'] = 'siswa/edit_siswa';
				$this->load->view('admin_main', $this->data);
			}
			
		}

		else
		{
			redirect('siswa');

		}
	}

	public function update($id)
	{
		$str = $this->input->post('tgl');
		$arr = explode("-" , $str);
		$fixstr =array_slice($arr,0);
		$ubah = array (
					'nis_siswa' => $this->input->post('nis'),
					'nama_siswa' => $this->input->post('nama'),
					'tgl_lahir_siswa' => $fixstr[2] ."-" .$fixstr[1] ."-" .$fixstr[0],
					'jk_siswa' => $this->input->post('jk')
			);

		$this->siswa_m->update($ubah, $id);
		redirect('siswa','refresh');
	}

	public function delete()
	{
		$id = $this->input->post('id_siswa');
		$this->siswa_m->delete($id);
		redirect('siswa', 'refresh');
	}

}
