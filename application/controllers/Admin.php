<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('query');
		$this->load->helper('url');
		$this->load->view('layout/admin_header');
	}

	public function index(){
		$data['judul'] = "Daftar Mahasiswa kerja praktek";
		$data['user'] = $this->query->GetdataMhs()->result();
		$this->load->view('admin/datamahasiswa',$data);
	}

	public function datadosen(){
		$data['judul'] = "Daftar Dosen Pembimbing kerja praktek";
		$data['user'] = $this->query->GetdataDosen()->result();
		$this->load->view('admin/datadosen',$data);
	}

	public function datasidang(){
		$data['judul'] = "Data Sidang Mahasiswa kerja praktek";
		$data['user'] = $this->query->Getdatasidang()->result();
		$this->load->view('admin/datasidang',$data);
	}

	public function tambahberita(){
		// $data['judul'] = "Tambah Info kerja praktek";
		$this->load->view('admin/postinfo');
	}
}
