<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->config('facebook');
		
		$this->load->library('facebook');

		echo $login_url = $this->facebook->login_url();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */