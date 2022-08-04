<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desa extends CI_Controller {

  public function index()

  {
    $data['tbl_desa'] = $this->Modeldesa->SemuaData('tbl_desa');
    $this->load->view('tamplate/header');
    $this->load->view('tamplate/sidebar');
    $this->load->view('tamplate/topbar');
    $this->load->view('desa', $data);
    $this->load->view('tamplate/footer'); 
    // var_dump($data['tbl_kecamatan']);
	// die;
  }

    public function tambah_data()
{
    $data['tbl_desa'] = $this->Modeldesa->SemuaData('tbl_desa');
    $data['tbl_kecamatan'] = $this->Modelkecamatan->SemuaData('tbl_kecamatan');
    $data['tbl_kabupatenn'] = $this->Modelkecamatan->SemuaData('tbl_kabupatenn');
    $data['tbl_provinsi'] = $this->Modelkecamatan->SemuaData('tbl_provinsi');
    $this->load->view('tamplate/header');
    $this->load->view('tamplate/sidebar');
    $this->load->view('tamplate/topbar');
    $this->load->view('tambah_data_desa', $data);
    $this->load->view('tamplate/footer');	
}

public function tambah_data_desa()
{
    $this->Modeldesa->tambah_data_desa();
    redirect('desa');
}
public function hapus_data($id)
	{
		$this->Modeldesa->hapus_data ($id);
		redirect('desa');
	}

  public function edit_data ($id)
	{
		// $data['tbl_desa']=$this->Modeldesa->SemuaData('tbl_desa');
		$data['tbl_desa']=$this->Modeldesa->ambil_id_desa($id);
		// var_dump($data['tbl_kecamatan']);
		// die;
    $data['tbl_kecamatan'] = $this->Modelkecamatan->SemuaData('tbl_kecamatan');
    $data['tbl_kabupatenn'] = $this->Modelkabupaten->SemuaData('tbl_kabupatenn');
		$data['tbl_provinsi'] = $this->Modelkabupaten->SemuaData('tbl_provinsi');
		$this->load->view('tamplate/header');
		$this->load->view('tamplate/sidebar');
		$this->load->view('tamplate/topbar');
		$this->load->view('edit_data_desa', $data);
		$this->load->view('tamplate/footer');
	}

	public function edit_data_desa ()
	{
	$this -> Modeldesa->proses_edit_desa();
	redirect('desa');
}
}
?>