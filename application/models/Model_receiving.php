<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_receiving extends CI_Model{
	function tampil_data(){
		return $this->db->get('receiving');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function data_rack($rack){
		$data = $this->db->query('SELECT COUNT(*) AS Rack FROM binner WHERE rack = "'.$rack.'";')->result_array();
		return $data;
	}
}