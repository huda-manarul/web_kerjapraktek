<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('upload');	
		$this->load->model('query');
		$this->load->helper('url');
		$this->load->view('layout/mahasiswa_header');
	}

	public function index()
	{
		$data['judul'] = "Daftar Mahasiswa kerja praktek";
		$data['user'] = $this->query->GetdataMhs()->result();
		$this->load->view('mahasiswa/datamahasiswa',$data);
	}

	public function informasi(){
		$data['user'] = $this->query->Getdatainfo()->result();
		$this->load->view('mahasiswa/daftarberita',$data);
	}

	public function inputDosbing(){
		$data['judul'] = "Halaman Input dosbing";
		$data['user'] = $this->query->GetdataDosen()->result();
		$this->load->view('pendaftaran/dosbing',$data);

	}

	public function prosesinputdosbing(){
		$nim = $this->input->post('nim');
		$nip = $this->input->post('nip');
		//$dosbing = $this->input->post('nama_dosen');
		$data = array(
			'nim' => $nim,
			'nip' => $nip
			//'nama' => $dosbing
		);
		$this->query->Insertdatadosbing($data,'data_mahasiswa_dosbing');
		redirect(base_url().'mahasiswa','refresh');

	}

	public function daftarSidangKP(){
		$data['judul'] = "Halaman Pendaftaran Sidang KP";
		$this->load->view('pendaftaran/sidang',$data);

	}

	public function prosesdaftarsidangKP(){

		$nim = $this->input->post('nim');
		$judul = $this->input->post('judul');

		$config['upload_path'] = './assets/images/'; 
		$config['allowed_types'] = 'jpg|png|jpeg|bmp'; 
		$config['encrypt_name'] = FALSE; 

		$this->upload->initialize($config);

		$this->upload->do_upload('sk');
		$sk = $this->upload->data();
		$ketmagang=$sk['file_name'];

		$this->upload->do_upload('pengesahan');
		$pengesahan = $this->upload->data();
		$sah=$pengesahan['file_name'];

		$data = array(
			'nim' => $nim,
			'judul_kp' => $judul,
			'lembar_pengesahan' => $sah,
			'surat_magang' => $ketmagang
		);
		$this->query->Insertdatasidang($data,'data_mahasiswa_sidang');
		redirect(base_url().'mahasiswa','refresh');
		// echo $nim." ".$judul." ".$ketmagang." ".$sah;


	}

}
