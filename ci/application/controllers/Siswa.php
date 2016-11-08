<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends Auth_Controller {

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

		$data['siswa'] 	= $this->M_siswa->getList($limit, $offset);
		
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
		
		$this->form_validation->set_rules('nama[]', 'Nama', 'required');
		$this->form_validation->set_rules('alamat[]', 'Alamat', 'required');

		if ($this->form_validation->run() == FALSE)
        {
        	$msg = validation_errors();
        	
        	$this->session->set_flashdata('alert_msg', err_message($msg));

        	redirect('siswa/form');
        }
        else
        {
            $param = $this->input->post();

            $proses_simpan = $this->M_siswa->simpanSiswa($param);

			if ($proses_simpan >= 0) {
				
				$msg = "Data berhasil dimasukkan";

				$this->session->set_flashdata('alert_msg', succ_message($msg));

				redirect('siswa');
			} else {
				redirect('siswa/form');
			}
        }

	}

	public function form_update($id)
	{
		$siswa 			= $this->M_siswa->detailSiswa($id);

		$data['siswa'] 	= $siswa;

		$this->load->view('form_update_siswa', $data);
	}

	public function actSaveUpdate()
	{
		$param = $this->input->get();

		$proses_simpan = $this->M_siswa->updateSiswa($param);

		if ($proses_simpan >= 0) {
			redirect('siswa');
		} else {
			redirect('siswa/form');
		}
	}

	public function cobaSession()
	{
		$arr = [
			'id' => 1,
			'nama' => 'Thoni',
			'alamat' => 'Jl Suhat',
		];

		$this->session->set_userdata('userSession', $arr);
		$this->session->set_userdata('nama_session', $arr['nama']);
	}

	public function lihatSession()
	{
		// untuk mengambil semua session
		$sesi = $this->session->all_userdata();

		// untuk mengambil salah satu session yang sudah dibuat
		$nama = $this->session->userdata('nama_session');

		echo "<pre>";
		print_r ($sesi);
		echo "</pre>";

		echo $nama;
	}

	public function hapusSession()
	{
		$this->session->sess_destroy();
	}

	public function upload_file()
	{
		$this->load->view('form_upload');
	}

	public function act_upload()
	{
		echo "<pre>";
		print_r ($_FILES);
		echo "</pre>";

		$path = './assets/file/';

		$config['upload_path'] = $path;
		$config['allowed_types'] = 'jpg|png';
		// $config['max_size']  = '100';  // dalam ukuran KB
		// $config['max_width']  = '1024'; // dalam ukuran pixel
		// $config['max_height']  = '768'; // dalam ukuran pixel
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('file_upload')){
			$error = array('error' => $this->upload->display_errors());

			echo "<pre>";
			print_r ($error);
			echo "</pre>";
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			echo "success";
			echo "<pre>";
			print_r ($data);
			echo "</pre>";
		}
	}
}

/* End of file Siswa.php */
/* Location: ./application/controllers/Siswa.php */