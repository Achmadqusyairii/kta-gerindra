<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelkecamatan extends CI_Model 
{
	public function SemuaData($table)
	{
		return $this->db->get($table)->result_array(); 
	}
    public function tambah_data_kecamatan()
	{
		$data =[
			"kd_prov"=> $this->input->post('kd_p'),
			"kd_kab"=> $this->input->post('kd_k'),
            "kd_kec"=> $this->input->post('kd_ke'),
            "kecamatan"=> $this->input->post('kecamatan'),
		];
		$this->db->insert('tbl_kecamatan', $data);
	}

    public function hapus_data ($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tbl_kecamatan');
	}

    public function ambil_id_kecamatan($id)
	{
		return $this->db->get_where('tbl_kecamatan', ['id' => $id])
		->row_array();
	}

	public function proses_edit_kecamatan()
	{
		$data =[
			"kd_prov"=> $this->input->post('kd_p'),
			"kd_kab"=> $this->input->post('kd_k'),
            "kd_kec"=> $this->input->post('kd_ke'),
            "kecamatan"=> $this->input->post('kecamatan'),
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('tbl_kecamatan', $data);
	}
}
