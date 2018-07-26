<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_binner extends CI_Model{


	public function getdata_forbinner(){
		
		$query = $this->db->get('receiving');
		return $query->result_array();
	}
	public function getrow_forbinner($id){
		$query = $this->db->where();
		return $query->result_array();
	}
	public function add_torack($table,$data){
		$status = array(
			'status' => 'Done'
		);
		$this->db->insert($table,$data);

		$this->db->where('scanner_lot',$data['scanner_upn']);
		$this->db->update('receiving',$status = array(
			'status' => 'Done'
		));
	}

}