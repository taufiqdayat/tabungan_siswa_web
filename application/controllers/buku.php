<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	public function index()
	{
		$this->load->view('buku/login');
	}

	public function ceklog()
	{
		$data = array(
				'nis_siswa' => $this->input->post('nis'),
				'pin_siswa' => $this->hash($this->input->post('pin'))
			);

		$result = $this->buku_m->cek($data);

		if (count($result)) {
			$user = array(
				'nis' => $result->nis_siswa,
				'pin' => $result->pin_siswa,
			);
			$this->session->set_userdata($user);

			redirect('buku/semua','refresh');
		}
		else
		{
			echo "<script>alert('salah')</script>";
			redirect('buku','refresh');
		}
	}

	public function semua() 
	{
		if (empty($this->session->userdata('nis')))
		{
			redirect('buku','refresh');
		}
		else
		{
			$nis = $this->session->userdata('nis'); 
		
			$masuk = $this->buku_m->masuk($nis);
			$keluar = $this->buku_m->keluar($nis);
			$this->data['jumlah'] =$masuk-$keluar;
			$this->data['siswa'] = $this->buku_m->bukusiswa($nis);

			$this->data['javasc'] = 'js/datatable';
			$this->data['subview'] = 'buku/lihat';
			$this->load->view('user_main', $this->data);
		}
	}

	public function changepin()
	{
		$this->data['subview'] = 'buku/changepin';
		$this->load->view('user_main', $this->data);
	}

	public function pinupdate()
	{
		$id = $this->session->userdata('nis');
		$ubah = array (
					'pin_siswa' => $this->hash($this->input->post('pinnew')),
			);

		$this->siswa_m->updatepin($ubah, $id);
		redirect('buku/semua','refresh');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('buku','refresh');
	}

	public function hash($string)
	{
		return hash('md5', $string);
	}

}

/* End of file bukutab.php */
/* Location: ./application/controllers/bukutab.php */