<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}


	public function index()
	{	
		
		$this->data['subview'] = 'hallo';
		$this->data['countsiswa'] = $this->siswa_m->count();
		$this->data['countsetor'] = $this->setor_m->count();
		$this->data['counttarik'] = $this->tarik_m->count();
		$this->data['countadmin'] = $this->admin_m->count();
		$this->load->view('admin_main', $this->data);
	}

}
