<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('M_login');

	}

	public function index()
	{
		// UNTUK MENGECEK APAKAH USER SUDAH LOGIN APA BELUM

		$user = $this->session->userdata('user_sesssion');

		// jika sudah login maka secara otomatis diredirect ke siswa
		if (count($user) > 0) {
			redirect('siswa');
		}

		// jika belum login maka masuk ke view login
		$this->load->view('login');			
	}

	public function act_login()
	{
		$param = $this->input->post();

		$data_login = $this->M_login->periksa_login($param);
		
		if (count($data_login) > 0) {
			$this->session->set_userdata( 'user_sesssion', $data_login );

		}else{
			redirect('login');
		}

		redirect('siswa');
	}


	public function aksi_logout()
	{
		// untuk menghapus semua session

		$this->session->sess_destroy();

		// kemudian redirect ke login
		redirect('login');
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */