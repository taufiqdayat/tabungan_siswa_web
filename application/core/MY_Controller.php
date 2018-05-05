<?php
class MY_Controller extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
	    if (! empty($this->session->userdata['id'])) {
            $this->data['admin_info'] = $this->auth_m->get($this->session->userdata['id']);
        }

        $exception_uris = array(
            'auth/index',
            'auth/logout'
        );
        if (in_array(uri_string(), $exception_uris) == FALSE) {
            if ($this->session->userdata('loggedin') == FALSE) {
                redirect('auth');
            }
        }
	}
}
/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */