<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

  public function index()

  {
    $data['tbl_anggota'] = $this->Modelanggota->SemuaData('tbl_anggota');
    $this->load->view('tamplate/header');
    $this->load->view('tamplate/sidebar');
    $this->load->view('tamplate/topbar');
    $this->load->view('anggota', $data);
    $this->load->view('tamplate/footer'); 
    // var_dump($data['tbl_kecamatan']);
	// die;
  }
  public function tambah_data()
{
    $data['tbl_jabatan'] = $this->Modellevel->SemuaData('tbl_jabatan');
    $data['tbl_desa'] = $this->Modeldesa->SemuaData('tbl_desa');
    $data['tbl_kecamatan'] = $this->Modelkecamatan->SemuaData('tbl_kecamatan');
    $data['tbl_kabupatenn'] = $this->Modelkecamatan->SemuaData('tbl_kabupatenn');
    $data['tbl_provinsi'] = $this->Modelkecamatan->SemuaData('tbl_provinsi');
    $this->load->view('tamplate/header');
    $this->load->view('tamplate/sidebar');
    $this->load->view('tamplate/topbar');
    $this->load->view('tambah_data_anggota', $data);
    $this->load->view('tamplate/footer');	
}

public function tambah_data_anggota()
{
    $this->Modelanggota->tambah_data_anggota();
    redirect('anggota');
}
public function hapus_data($id)
	{
		$this->Modelanggota->hapus_data ($id);
		redirect('anggota');
	}
  public function edit_data ($id)
	{
		$data['tbl_anggota']=$this->Modelanggota->ambil_id_anggota ($id);
		// var_dump($data['tbl_kecamatan']);
		// die;
    $data['tbl_desa'] = $this->Modeldesa->SemuaData('tbl_desa');
    $data['tbl_jabatan'] = $this->Modellevel->SemuaData('tbl_jabatan');
    $data['tbl_kecamatan'] = $this->Modelkecamatan->SemuaData('tbl_kecamatan');
    $data['tbl_kabupatenn'] = $this->Modelkabupaten->SemuaData('tbl_kabupatenn');
		$data['tbl_provinsi'] = $this->Modelkabupaten->SemuaData('tbl_provinsi');
		$this->load->view('tamplate/header');
		$this->load->view('tamplate/sidebar');
		$this->load->view('tamplate/topbar');
		$this->load->view('edit_data_anggota', $data);
		$this->load->view('tamplate/footer');
	}

	public function edit_data_anggota ()
	{
	$this -> Modelanggota->proses_edit_anggota();
	redirect('anggota');
}

public function detail ($id){
  $this->load->model('modelanggota');
  $detail = $this->modelanggota->detail_data($id);
  $data['detail'] = $detail;
  $this->load->view('tamplate/header');
		$this->load->view('tamplate/sidebar');
		$this->load->view('tamplate/topbar');
		$this->load->view('detail', $data);
		$this->load->view('tamplate/footer');
}
public function print ($id)
{
  $data['anggota']=$this->Modelanggota->ambil_id_anggota ($id);
  // $data['tbl_anggota'] = $this->Modelanggota->SemuaData('tbl_anggota');
  $this->load->view('printkta', $data);
}
}