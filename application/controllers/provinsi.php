<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Provinsi extends CI_Controller {

  public function index()

  {
    $data['tbl_provinsi'] = $this->Modelprovinsi->SemuaData();
    $this->load->view('tamplate/header');
    $this->load->view('tamplate/sidebar');
    $this->load->view('tamplate/topbar');
    $this->load->view('provinsi', $data);
    $this->load->view('tamplate/footer'); 
  }
  public function tambah_data()
	{
		$data['tbl_provinsi'] = $this->Modelprovinsi->SemuaData();
		$this->load->view('tamplate/header');
		$this->load->view('tamplate/sidebar');
		$this->load->view('tamplate/topbar');
		$this->load->view('tambah_data_provinsi', $data);
		$this->load->view('tamplate/footer');	
	}

	public function tambah_data_provinsi()
	{
		$this->Modelprovinsi->tambah_data_provinsi();
		redirect('provinsi');
	}

	public function hapus_data($id)
	{
		$this->Modelprovinsi->hapus_data ($id);
		redirect('provinsi');
	}
	public function edit_data ($id)
	{
		$data['tbl_provinsi']=$this->Modelprovinsi->ambil_id_provinsi($id);
		$this->load->view('tamplate/header');
		$this->load->view('tamplate/sidebar');
		$this->load->view('tamplate/topbar');
		$this->load->view('edit_data_provinsi', $data);
		$this->load->view('tamplate/footer');
	}

	public function edit_data_provinsi ()
	{
	$this -> Modelprovinsi->proses_edit_provinsi();
	redirect('provinsi');
	}

	//kabupaten
	
}
?>