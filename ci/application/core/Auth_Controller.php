<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// UNTUK MENGECEK APAKAH USER SUDAH LOGIN APA BELUM
		$this->user = $this->session->userdata('user_sesssion');

		if (count($this->user) == 0) {
			redirect('login');
		}
	}

	public function index()
	{
		
	}

}

/* End of file AuthController.php */
/* Location: ./application/core/AuthController.php */