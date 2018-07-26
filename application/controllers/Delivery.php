<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delivery extends CI_Controller {

	public function __construct()
  	{
		parent::__construct();
    }

    public function index(){
		$scanner_upn = $this->db->query('SELECT DISTINCT no_transfer FROM delivery')->result_array();
		$inventory = array();
		foreach ($scanner_upn as $key => $value) {
		$data = $this->db->query("SELECT SUM(qty) AS qty,`no_transfer`,`scanner_upn`,`tgl_input`,`status`,`deliveryto`,`admin` FROM delivery WHERE `no_transfer` = '".$value['no_transfer']."' ")->result_array();
		$inventory[] = $data;
		}
		$inventory['datadelivery'] = $inventory;

		// print_r($inventory['datadelivery']);
		// die;
		$this->load->view('header');
		$this->load->view('delivery',$inventory);
		$this->load->view('footer');
    }
    public function deliveryview($scanner){
    	$data['datadelivery'] = $this->db->where('no_transfer',$scanner)->get('delivery')->result_array();
		
		// print_r($data['datadelivery']);
		// die;
		$this->load->view('header');
		$this->load->view('deliveryview',$data);
		$this->load->view('footer');
    }
}
