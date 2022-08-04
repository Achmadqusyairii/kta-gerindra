<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kecamatan extends CI_Controller {

  public function index()

  {
    $data['tbl_kecamatan'] = $this->Modelkecamatan->SemuaData('tbl_kecamatan');
    $this->load->view('tamplate/header');
    $this->load->view('tamplate/sidebar');
    $this->load->view('tamplate/topbar');
    $this->load->view('kecamatan', $data);
    $this->load->view('tamplate/footer'); 
    // var_dump($data['tbl_kecamatan']);
	// die;
  }
  public function tambah_data()
	{
        $data['tbl_kecamatan'] = $this->Modelkecamatan->SemuaData('tbl_kecamatan');
		$data['tbl_kabupatenn'] = $this->Modelkecamatan->SemuaData('tbl_kabupatenn');
		$data['tbl_provinsi'] = $this->Modelkecamatan->SemuaData('tbl_provinsi');
		$this->load->view('tamplate/header');
		$this->load->view('tamplate/sidebar');
		$this->load->view('tamplate/topbar');
		$this->load->view('tambah_data_kecamatan', $data);
		$this->load->view('tamplate/footer');	
	}

	public function tambah_data_kecamatan()
	{
		$this->Modelkecamatan->tambah_data_kecamatan();
		redirect('kecamatan');
	}

    public function hapus_data($id)
	{
		$this->Modelkecamatan->hapus_data ($id);
		redirect('kecamatan');
	}

    public function edit_data ($id)
	{
		$data['tbl_kecamatan']=$this->Modelkecamatan->ambil_id_kecamatan($id);
		// var_dump($data['tbl_kecamatan']);
		// die;
        $data['tbl_kabupatenn'] = $this->Modelkabupaten->SemuaData('tbl_kabupatenn');
		$data['tbl_provinsi'] = $this->Modelkabupaten->SemuaData('tbl_provinsi');
		$this->load->view('tamplate/header');
		$this->load->view('tamplate/sidebar');
		$this->load->view('tamplate/topbar');
		$this->load->view('edit_data_kecamatan', $data);
		$this->load->view('tamplate/footer');
	}

	public function edit_data_kecamatan ()
	{
	$this -> Modelkecamatan->proses_edit_kecamatan();
	redirect('kecamatan');
	}
	
}
?>