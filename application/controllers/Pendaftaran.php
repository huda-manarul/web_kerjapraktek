<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('query');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['user'] = $this->query->Getdatainfo()->result();
		$this->load->view('layout/main_header',$data);
		$this->load->view('pendaftaran/content',$data);

	}

	public function daftarKP()
	{
		$data['judul'] = "Halaman pendaftaran kerja praktek";
		$this->load->view('layout/main_header',$data);
		$this->load->view('pendaftaran/daftar',$data);
	}

	public function prosesdaftarkp()
	{
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


	public function daftarSidangKP(){
		$data['judul'] = "Halaman pendaftaran sidang kerja praktek";
		$this->load->view('layout/main_header',$data);
		$this->load->view('pendaftaran/sidang',$data);
	}

	public function prosesdaftarSidangKP(){
		$nim = $this->input->post('nim');
		$judul = $this->input->post('judul');
		echo $nim." ".$judul;
		
	}


	public function inputDosbing(){
		$data['judul'] = "Halaman pendaftaran sidang kerja praktek";
		$data['user'] = $this->query->GetdataDosen()->result();
		$this->load->view('layout/main_header',$data);
		$this->load->view('pendaftaran/dosbing',$data);

	}
	public function prosesinputdosbing(){
		$nim = $this->input->post('nim');
		$dosbing = $this->input->post('nama_dosen');
		$data = array(
			'nim' => $nim,
			'nama_dosen' => $dosbing
		);
		$this->query->Insertdatadosbing($data,'data_mahasiswa_dosbing');
		redirect(base_url(),'refresh');

	}

	public function login()
	{
		$this->load->view('admin/login');
	}

	public function proseslogin()
	{		
		$username = $this->input->post('username');
		$password = $this->input->post('password');
	}



	// function simpaninformasi(){
	// 	$judul=$this->input->post('judul');
	// 	$berita=$this->input->post('berita');

	// 	$data = array(
	// 		'judul_berita' => $judul,
	// 		'isi_berita' => $berita,
	// 	);
	// 	$this->query->InsertdataInfo($data,'data_informasi');
	// 	//redirect(base_url().'kerjapraktek/datamahasiswa','refresh');
	// }


	// public function informasi1(){
	// 	$this->load->view('admin/header');
	// 	$this->load->view('admin/postinfo');
	// }


	function informasi(){
		$id = 4;
		$where = array('id_berita' => $id);
		$data['user'] = $this->query->edit_data($where,'data_informasi')->result();
		$this->load->view('admin/main_header');
		$this->load->view('admin/postinfo',$data);
	}

	function updateinformasi(){
		$id = 4;
		$judul=$this->input->post('judul');
		$berita=$this->input->post('berita');

		$data = array(
			'judul_berita' => $judul,
			'isi_berita' => $berita,
		);

		$where = array(
			'id_berita' => $id
		);
		$this->query->update_data($where,$data,'data_informasi');
		echo "<script>
		alert('Data Berhasil di Update');
		window.location.href='dashboard';
		</script>";
		//redirect(base_url().'kerjapraktek/dashboard','refresh');
	}



	

}
