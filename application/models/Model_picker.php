<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_picker extends CI_Model {
	
public function search_data($value){

	$data['search_value'] = $this->db->query("SELECT * FROM `binner` WHERE `scanner_upn` = '".$value['vscanner']."' OR `series` = '".$value['vseries']."' OR `ref_upn` = '".$value['vref']."' OR `lot_no` = '".$value['vlot']."'")->result_array();
	return $data;
	}

public function input_datapicker($data,$table){
	$this->db->insert($table,$data);
	}

public function delete_databinner($id,$table){
	$this->db->where('id', $id);
	$this->db->delete($table);
	}

public function getdata_forpicker(){
		$query = $this->db->distinct()->select('scanner_upn')->get('picker');
		return $query->result_array();
	}
public function send_itempicker($data,$table,$scanner){
		$status = array(
			'status' => 'DONE'
		);

		$this->db->where('scanner_upn',$scanner);
		$this->db->update('picker',$status);

		$this->db->insert($table,$data);
	}
}
