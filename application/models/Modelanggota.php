<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelanggota extends CI_Model 
{
	public function SemuaData($table)
	{
		return $this->db->get($table)->result_array(); 
	}

public function tambah_data_anggota()
	{
		$data =[
			"kd_prov"=> $this->input->post('kd_p'),
			"kd_kab"=> $this->input->post('kd_k'),
            "kd_kec"=> $this->input->post('kd_ke'),
            "kd_desa"=> $this->input->post('kd_desa'),
            "level"=> $this->input->post('kd_jab'),
			"nama"=> $this->input->post('nama'),
			"tgl_lahir"=> $this->input->post('tgl_lahir'),
			"nik"=> $this->input->post('nik'),
			"no_kta"=> $this->input->post('kta'),
			"alamat"=> $this->input->post('alamat'),
			"tahun"=> $this->input->post('tahun'),
		];
		$this->db->insert('tbl_anggota', $data);
	}
	public function hapus_data ($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tbl_anggota');
	}
	public function ambil_id_anggota($id)
	{
		return $this->db->get_where('tbl_anggota', ['id' => $id])
		->row_array();
	}

	public function proses_edit_anggota()
	{
		$data =[
			"kd_prov"=> $this->input->post('kd_p'),
			"kd_kab"=> $this->input->post('kd_k'),
            "kd_kec"=> $this->input->post('kd_ke'),
            "kd_desa"=> $this->input->post('kd_de'),
            "level"=> $this->input->post('kd_jab'),
			"nama"=> $this->input->post('nama'),
			"tgl_lahir"=> $this->input->post('tgl_lahir'),
			"nik"=> $this->input->post('nik'),
			"no_kta"=> $this->input->post('kta'),
			"alamat"=> $this->input->post('alamat'),
			"tahun"=> $this->input->post('tahun'),
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('tbl_anggota', $data);
	}

	public function detail_data ($id = null)
	{
		$query = $this->db->get_where('tbl_anggota', array('id' => $id))->row();
		return $query;
	}
}