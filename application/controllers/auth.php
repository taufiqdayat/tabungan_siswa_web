<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function cek()
	{
		$data = array(
				'username_admin' => $this->input->post('username'),
				'password_admin' => $this->hash($this->input->post('password'))
			);

		$result = $this->auth_m->cek($data);

		if (count($result)) {
			$user = array(
				'id' => $result->id_admin,
				'loggedin' => TRUE
			);
			$this->session->set_userdata($user);

			redirect('home','refresh');
		}
		else
		{
			echo "<script>alert('salah')</script>";
			redirect('auth','refresh');
		}
	}

	public function logout()
	{

		$this->session->sess_destroy();
		redirect('auth','refresh');
	}

	public function hash($string)
	{
		return hash('md5', $string);
	}

}
