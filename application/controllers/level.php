<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class level extends CI_Controller {

	public function index()

	{
		$data['tbl_jabatan'] = $this->Modellevel->SemuaData();
		$this->load->view('tamplate/header');
		$this->load->view('tamplate/sidebar');
		$this->load->view('tamplate/topbar');
		$this->load->view('level', $data);
		$this->load->view('tamplate/footer');	
	}
	public function tambah_data()
	{
		$data['tbl_jabatan'] = $this->Modellevel->SemuaData();
		$this->load->view('tamplate/header');
		$this->load->view('tamplate/sidebar');
		$this->load->view('tamplate/topbar');
		$this->load->view('tambah_data_level', $data);
		$this->load->view('tamplate/footer');	
	}

	public function tambah_data_level()
	{
		$this->Modellevel->tambah_data_level();
		redirect('level');
	}

	public function hapus_data($id)
	{
		$this->Modellevel->hapus_data ($id);
		redirect('level');
	}
	public function edit_data ($id)
	{
		$data['tbl_jabatan']=$this->Modellevel->ambil_id_jabatan($id);
		$this->load->view('tamplate/header');
		$this->load->view('tamplate/sidebar');
		$this->load->view('tamplate/topbar');
		$this->load->view('edit_data_level', $data);
		$this->load->view('tamplate/footer');
	}

	public function edit_data_level ()
	{
	$this -> Modellevel->proses_edit_data();
	redirect('level');
	}
}
?>