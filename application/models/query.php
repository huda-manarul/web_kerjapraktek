<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class query extends CI_Controller {
	
	public function GetdataDosen(){
		return $this->db->get('data_dosen');
	}

	public function InsertdataKP($data,$table)
	{
		$this->db->insert($table,$data);
	}

	public function Insertdatadosbing($data,$table)
	{
		$this->db->insert($table,$data);
	}
	
	public function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
	
	public function GetdataMhs(){
		return $this->db->get('data_mahasiswa_kp');
	}

	public function CountdataMhs(){
		return $this->db->get('data_mahasiswa_kp')->num_rows();
	}

	public function Getdatainfo(){
		return $this->db->get('data_informasi');
	}


	public function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

}

?>