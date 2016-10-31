<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model {

	public function getList($limit, $offset)
	{
		$data = $this->db->get('campaign', $limit, $offset ); 
		
		return $data->result();
	}	

	public function totalRows()
	{
		$data = $this->db->get('campaign'); 
		
		return $data->num_rows();
	}

}

/* End of file M_siswa.php */
/* Location: ./application/models/M_siswa.php */