<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class query extends CI_Controller {

	public function InsertdataKP($data,$table)
	{
		$this->db->insert($table,$data);
	}

	
	public function GetdataDosen(){
		return $this->db->get('data_dosen');
	}


	public function Insertdatadosbing($data,$table)
	{
		$this->db->insert($table,$data);
	}
	
	public function Insertdatasidang($data,$table)
	{
		$this->db->insert($table,$data);
	}
	
	public function Getdatasidang(){
		$this->db->select('*');
		$this->db->from('data_mahasiswa_dosbing');
		$this->db->join('data_dosen', 'data_dosen.nip = data_mahasiswa_dosbing.nip');
		$this->db->join('data_mahasiswa_kp', 'data_mahasiswa_kp.nim = data_mahasiswa_dosbing.nim');
		$this->db->join('data_mahasiswa_sidang', 'data_mahasiswa_sidang.nim = data_mahasiswa_dosbing.nim');
		return $this->db->get();
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


	function simpan_berita($jdl,$gambar){
		$hsl=$this->db->query("INSERT INTO file (nama,img) VALUES ('$jdl','$gambar')");
		return $hsl;
	}

	
}

?>