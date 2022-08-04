<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelkabupaten extends CI_Model 
{
	public function SemuaData($table)
	{
		return $this->db->get($table)->result_array(); 
	}
	public function tambah_data_kabupaten()
	{
		$data =[
			"kd_prov"=> $this->input->post('kd_p'),
			"kd_kab"=> $this->input->post('kd_k'),
            "kabupaten"=> $this->input->post('kabupaten'),
		];
		$this->db->insert('tbl_kabupatenn', $data);
	}

	public function hapus_data ($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tbl_kabupatenn');
	}

	public function ambil_id_kabupaten($id)
	{
		return $this->db->get_where('tbl_kabupatenn', ['id' => $id])
		->row_array();
	}

	public function proses_edit_kabupaten ()
	{
		$data =[
			"kd_prov"=> $this->input->post('kd_p'),
			"kd_kab"=> $this->input->post('kd_k'),
			"kabupaten"=> $this->input->post('kabupaten'),
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('tbl_kabupatenn', $data);
	}

	//kabupaten
	

	
}