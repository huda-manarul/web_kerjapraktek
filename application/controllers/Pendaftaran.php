<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('query');
		$this->load->helper('url');
		$this->load->view('layout/main_header');
	}

	public function index(){
		$data['user'] = $this->query->Getdatainfo()->result();
		$this->load->view('pendaftaran/content',$data);

	}

	public function daftarKP(){
		$data['judul'] = "Halaman pendaftaran kerja praktek";
		$this->load->view('pendaftaran/daftar',$data);
	}

	public function prosesdaftarkp(){
		$jenis = $this->input->post('jenis');
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$tempat = $this->input->post('tempat');
		$alamat = $this->input->post('alamat');
		$penyelia = $this->input->post('penyelia');

		$data = array(
			'nim' => $nim,
			'nama' => $nama,
			'jenis_kegiatan' => $jenis,
			'tempat_kp' => $tempat,
			'alamat_tempat_kp' => $alamat,
			'penyelia' => $penyelia
		);
		$this->query->InsertdataKP($data,'data_mahasiswa_kp');
		redirect(base_url(),'refresh');

	}



}
