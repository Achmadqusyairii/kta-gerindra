<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modellevel extends CI_Model 
{
	public function SemuaData()
	{
		return $this->db->get('tbl_jabatan')->result_array(); //banyak data kepanggil ya
	}

	public function tambah_data_level()
	{
		$data =[
			"level"=> $this->input->post('level'),
			"nm_jabatan"=> $this->input->post('nama'),
		];
		$this->db->insert('tbl_jabatan', $data);
	}

	public function hapus_data ($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tbl_jabatan');
	}

	public function ambil_id_jabatan($id)
	{
		return $this->db->get_where('tbl_jabatan', ['id' => $id])
		->row_array();
	}

	public function proses_edit_data ()
	{
		$data =[
			"level"=> $this->input->post('level'),
			"nm_jabatan"=> $this->input->post('nama'),
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('tbl_jabatan', $data);
	}

	
}