<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tarik extends MY_Controller {

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
		$this->data['all'] = $this->tarik_m->alldata();
		$this->data['subview'] = 'tarik/index';
		$this->data['javasc'] = 'js/datatable';
		$this->load->view('admin_main', $this->data);
	}

	public function add()
	{
		$this->data['subview'] = 'tarik/form_tarik';
		$this->load->view('admin_main', $this->data);
	}

	public function confirm()
	{
		$this->data['subview'] = 'setor/confirm';
		$nis = $this->input->post('nis');
		$this->data['edit'] = $this->input->post('tambahan');

		

		$hasil = $this->tarik_m->picksiswa($nis);

		if (count($hasil)) {
			
			$this->data['diri'] = $this->tarik_m->picksiswa($nis);
		}
		else
		{
			echo "<script>alert('data tidak ditemukan')</script>";
			redirect('setor/add','refresh');
		}

		$this->data['nom'] = $this->input->post('nominal');
		$this->data['ket'] = $this->input->post('ket');

		$this->load->view('admin_main', $this->data);
	}

	public function proses()
	{
		$this->load->helper('date');
		$nis = $this->input->post('nis');
		$hasil = $this->tarik_m->picksiswa($nis);
		$nom=$this->input->post('nominal');

		$masuk = $this->buku_m->masuk($nis);
		$keluar = $this->buku_m->keluar($nis);
		$jumlah =$masuk-$keluar;

		if (count($hasil)) 
		{
			if ($nom>$jumlah ) 
			{
				echo "<script>alert('Tidak Cukup Penarikan')</script>";
				redirect('tarik/add','refresh');
			}
			else
			{

			$simpan=array(
					'nis_siswa' => $this->input->post('nis'),
					'nominal_nabung' => $this->input->post('nominal'),
					'keterangan' => $this->input->post('ket'),
					'petugas' => $this->auth_m->get($this->input->post('petugas'))->nama_admin,
				);
			$this->tarik_m->save($simpan);
        	echo "<script>alert('sukses');</script>";
       		redirect('tarik','refresh');
       		}
		} 
		else
		{
			echo "<script>alert('data tidak ditemukan')</script>";
			redirect('tarik/add','refresh');
		}
	}

	public function edit($id=null)
	{
		if ($id)
		{ 
			if($this->tarik_m->edit($id)==null)
			{
				redirect('setor','refresh');
			}

			else
			{
				$this->data['nabung'] = $this->tarik_m->edit($id);
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
		$this->tarik_m->update($ubah, $id);
		
       redirect('setor','refresh');
	}

	public function delete()
	{
		$id = $this->input->post('id_nabung');
		$this->tarik_m->delete($id);
		redirect('setor', 'refresh');
	}

}

/* End of file tarik.php */
/* Location: ./application/controllers/tarik.php */