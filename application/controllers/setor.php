<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setor extends MY_Controller {
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
		$this->data['all'] = $this->setor_m->alldata();
		$this->data['subview'] = 'setor/index';
		$this->data['javasc'] = 'js/datatable';
		$this->load->view('admin_main', $this->data);
	}

	public function add()
	{
		$this->data['subview'] = 'setor/form_setor';
		$this->data['javasc'] = 'js/modals';
		$this->load->view('admin_main', $this->data);
	}

	public function proses()
	{
		$this->load->helper('date');
		$nis = $this->input->post('nis');
		$hasil = $this->setor_m->picksiswa($nis);
		if (count($hasil)) 
		{
			$simpan=array(
					'nis_siswa' => $this->input->post('nis'),
					'nominal_nabung' => $this->input->post('nominal'),
					'keterangan' => $this->input->post('ket'),
					'petugas' => $this->auth_m->get($this->input->post('petugas'))->nama_admin,
				);
			$this->setor_m->save($simpan);
		
        	echo "<script>alert('sukses');</script>";
       		redirect('setor','refresh');
		} 
		else
		{
			echo "<script>alert('data tidak ditemukan')</script>";
			redirect('setor/add','refresh');
		}
		
		
	}

	public function edit($id=null)
	{
		if ($id)
		{ 
			if($this->setor_m->edit($id)==null)
			{
				redirect('setor','refresh');
			}

			else
			{
				$this->data['nabung'] = $this->setor_m->edit($id);
				$this->data['subview'] = 'setor/edit';
				$this->load->view('admin_main', $this->data);
			}
			
		}

		else
		{
			redirect('setor','refresh');

		}
	}

	public function update($id)
	{
		$ubah=array(
					'nis_siswa' => $this->input->post('nis'),
					'nominal_nabung' => $this->input->post('nominal'),
					'keterangan' => $this->input->post('ket'),
				);
		$this->setor_m->update($ubah, $id);
		
       redirect('setor','refresh');
	}

	public function delete()
	{
		$id = $this->input->post('id_nabung');
		$this->setor_m->delete($id);
		redirect('setor', 'refresh');
	}

}

/* End of file setor.php */
/* Location: ./application/controllers/setor.php */