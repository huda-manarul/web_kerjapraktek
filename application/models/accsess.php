<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class accsess extends CI_Controller {
	
	public function GetdataUser($table,$where){		
		return $this->db->get_where($table,$where);
	}
	public function GetdataMhs(){
		$data = $this->db->query("SELECT * FROM data_dosen");
		return $data->result_array();
	}

	
}

?>