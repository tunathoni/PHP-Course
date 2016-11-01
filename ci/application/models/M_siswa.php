<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model {

	public function getList($limit, $offset)
	{
		$data = $this->db->get('siswa', $limit, $offset ); 
		
		return $data->result();
	}	

	public function totalRows()
	{
		$data = $this->db->get('siswa'); 
		
		return $data->num_rows();
	}

	public function simpanSiswa($param='')
	{
		$object = [
			'nama' 		=> $param['nama'],
			'alamat' 	=> $param['alamat'],
		];

		$this->db->insert('siswa', $object);

		return $this->db->affected_rows();
	}

}

/* End of file M_siswa.php */
/* Location: ./application/models/M_siswa.php */