<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('query');
		$this->load->helper('url');
	}
	
	public function index()
	{
		$data['judul'] = "Daftar Mahasiswa kerja praktek";
		$data['user'] = $this->query->GetdataMhs()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/datamahasiswa',$data);
	}//
}
