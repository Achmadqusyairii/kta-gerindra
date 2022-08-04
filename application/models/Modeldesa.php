<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modeldesa extends CI_Model 
{
	public function SemuaData($table)
	{
		return $this->db->get($table)->result_array(); 
	}
    public function tambah_data_desa()
	{
		$data =[
			"kd_prov"=> $this->input->post('kd_p'),
			"kd_kab"=> $this->input->post('kd_k'),
            "kd_kec"=> $this->input->post('kd_ke'),
            "kd_desa"=> $this->input->post('kd_desa'),
            "desa"=> $this->input->post('desa'),
		];
		$this->db->insert('tbl_desa', $data);
	}
	public function hapus_data ($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tbl_desa');
	}

	public function ambil_id_desa($id)
	{
		return $this->db->get_where('tbl_desa', ['id' => $id])
		->row_array();
	}

	public function proses_edit_desa()
	{
		$data =[
			"kd_prov"=> $this->input->post('kd_p'),
			"kd_kab"=> $this->input->post('kd_k'),
            "kd_kec"=> $this->input->post('kd_ke'),
			"kd_desa"=> $this->input->post('kd_desa'),
            "desa"=> $this->input->post('desa'),
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('tbl_desa', $data);
	}
}