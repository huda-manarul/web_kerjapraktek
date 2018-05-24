<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('query');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['judul'] = "Daftar Mahasiswa kerja praktek";
		$data['user'] = $this->query->GetdataMhs()->result();
		$this->load->view('layout/mahasiswa_header');
		$this->load->view('mahasiswa/datamahasiswa',$data);
	}//

}
