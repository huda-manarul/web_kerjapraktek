<?php
class upload extends CI_Controller{

	function __construct() {
		parent::__construct();
		$this->load->library('upload');	
		$this->load->model('query');
	}

	function index(){
		$this->load->view('form_upload');
	}

	function simpan_post(){
		$config['upload_path'] = './assets/images/'; //path folder
	    $config['allowed_types'] = 'jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = FALSE; //nama yang terupload nantinya

	    $this->upload->initialize($config);
	    if(!empty($_FILES['filefoto']['name'])){
	    	if ($this->upload->do_upload('filefoto')){
	    		$gbr = $this->upload->data();
	    		$gambar=$gbr['file_name'];
	    		$jdl=$this->input->post('judul');

	    		$this->query->simpan_berita($jdl,$gambar);
	    		echo "terupload";
	    	}
	    	else{
	    		echo "belum terupload";
	    	}

	    }
	    else{
	    	echo "error";
	    }

	}

	
}