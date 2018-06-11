<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->model('query');
	}

	public function index(){
		$this->load->view('pendaftaran/login');
	}
	public function proseslogin(){		
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if ($username=='admin' && $password=='admin') {
			//$this->sesion->set_userdata('username',$username);
			redirect(base_url().'admin','refresh');
		}
		else{
			echo "gagal";
		}
	}


}

