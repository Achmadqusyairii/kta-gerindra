<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelprovinsi extends CI_Model 
{
	public function SemuaData()
	{
		return $this->db->get('tbl_provinsi')->result_array(); //banyak data kepanggil ya
	}
	public function tambah_data_provinsi()
	{
		$data =[
			"kd_prov"=> $this->input->post('kd'),
			"provinsi"=> $this->input->post('provinsi'),
		];
		$this->db->insert('tbl_provinsi', $data);
	}

	public function hapus_data ($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tbl_provinsi');
	}

	public function ambil_id_provinsi($id)
	{
		return $this->db->get_where('tbl_provinsi', ['id' => $id])
		->row_array();
	}

	public function proses_edit_provinsi ()
	{
		$data =[
			"kd_prov"=> $this->input->post('kd'),
			"provinsi"=> $this->input->post('provinsi'),
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('tbl_provinsi', $data);
	}

	//kabupaten
	

	
}