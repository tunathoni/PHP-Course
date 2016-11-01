<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_siswa');
	}

	public function index($halaman = '')
	{
		$limit = 10;

		if ($halaman != '') {
			$offset = $halaman;
		}else{
			$offset = 0;
		}

		$data['siswa'] = $this->M_siswa->getList($limit, $offset);


		$this->load->library('pagination');
		
		$config['base_url'] = base_url('siswa/index/');
		$config['total_rows'] = $this->M_siswa->totalRows();
		$config['per_page'] = $limit;
		$config['uri_segment'] = 3;
		$config['num_links'] = 3;
		$config['full_tag_open'] = '<p>';
		$config['full_tag_close'] = '</p>';
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<div>';
		$config['first_tag_close'] = '</div>';
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<div>';
		$config['last_tag_close'] = '</div>';
		$config['next_link'] = '&gt;';
		$config['next_tag_open'] = '<div>';
		$config['next_tag_close'] = '</div>';
		$config['prev_link'] = '&lt;';
		$config['prev_tag_open'] = '<div>';
		$config['prev_tag_close'] = '</div>';
		$config['cur_tag_open'] = '<b>';
		$config['cur_tag_close'] = '</b>';
		
		$this->pagination->initialize($config);
		
		$data['paging'] = $this->pagination->create_links();
		
		$this->load->view('siswa', $data);
	}

	public function form()
	{
		$this->load->view('form_siswa');
	}

	public function actSave()
	{
		$param = $this->input->get();

		$proses_simpan = $this->M_siswa->simpanSiswa($param);

		if ($proses_simpan >= 0) {
			redirect('siswa');
		} else {
			redirect('siswa/form');
		}
		
	}
}

/* End of file Siswa.php */
/* Location: ./application/controllers/Siswa.php */