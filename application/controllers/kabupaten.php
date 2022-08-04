<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kabupaten extends CI_Controller {

  public function index()

  {
    $data['tbl_kabupatenn'] = $this->Modelkabupaten->SemuaData('tbl_kabupatenn');
    $this->load->view('tamplate/header');
    $this->load->view('tamplate/sidebar');
    $this->load->view('tamplate/topbar');
    $this->load->view('kabupaten', $data);
    $this->load->view('tamplate/footer'); 
  }
  public function tambah_data()
	{
		$data['tbl_kabupatenn'] = $this->Modelkabupaten->SemuaData('tbl_kabupatenn');
		$data['tbl_provinsi'] = $this->Modelkabupaten->SemuaData('tbl_provinsi');
		$this->load->view('tamplate/header');
		$this->load->view('tamplate/sidebar');
		$this->load->view('tamplate/topbar');
		$this->load->view('tambah_data_kabupaten', $data);
		$this->load->view('tamplate/footer');	
	}

	public function tambah_data_kabupaten()
	{
		$this->Modelkabupaten->tambah_data_kabupaten();
		redirect('kabupaten');
	}

	public function hapus_data($id)
	{
		$this->Modelkabupaten->hapus_data ($id);
		redirect('kabupaten');
	}
	public function edit_data ($id)
	{
		$data['tbl_kabupatenn']=$this->Modelkabupaten->ambil_id_kabupaten($id);
		// var_dump($data['tbl_kabupatenn']);
		// die;
		$data['tbl_provinsi'] = $this->Modelkabupaten->SemuaData('tbl_provinsi');
		$this->load->view('tamplate/header');
		$this->load->view('tamplate/sidebar');
		$this->load->view('tamplate/topbar');
		$this->load->view('edit_data_kabupaten', $data);
		$this->load->view('tamplate/footer');
	}

	public function edit_data_kabupaten ()
	{
	$this -> Modelkabupaten->proses_edit_kabupaten();
	redirect('kabupaten');
	}

	//kabupaten
	
}
?>