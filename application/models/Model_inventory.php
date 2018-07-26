<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_inventory extends CI_Model{


	public function getdata_inventory(){
		
		$query = $this->db->get('binner');
		return $query->result_array();
	}
}