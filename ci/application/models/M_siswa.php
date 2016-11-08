<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends Auth_Model {

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
		$object = [];
		
		for ($i = 0 ; $i< count($param['nama']); $i++) {
			$object[] = [
				'nama' 		=> $param['nama'][$i],
				'alamat' 	=> $param['alamat'][$i]
			];
		}
		
		$this->db->insert_batch('siswa', $object);
		
		return $this->db->affected_rows();
	}

	public function detailSiswa($id)
	{
		$this->db->where('id', $id);
		$data = $this->db->get('siswa');

		return $data->row();
	}

	public function updateSiswa($param='')
	{
		$object = [
			'nama'		=> $param['nama'],
			'alamat'	=> $param['alamat'],
		];

		$this->db->where('id', $param['id']);

		$this->db->update('siswa', $object);

		return $this->db->affected_rows();
	}

}

/* End of file M_siswa.php */
/* Location: ./application/models/M_siswa.php */