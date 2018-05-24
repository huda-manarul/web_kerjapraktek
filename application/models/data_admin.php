<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_admin extends CI_Controller {
	
	public function GetdataDosen(){
		$data = $this->db->query("SELECT * FROM data_dosen");
		return $data->result_array();
	}

	
}

?>