<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pickers extends CI_Controller {

	public function __construct()
  	{
		parent::__construct();
		$this->load->model('Model_picker');
    }

	public function index()
	{
		$scanner_upn = $this->db->query('SELECT DISTINCT no_transfer FROM picker')->result_array();
		$inventory = array();
		foreach ($scanner_upn as $key => $value) {
		$data = $this->db->query("SELECT SUM(qty) AS qty,`no_transfer`,`scanner_upn`,`tgl_input`,`status`,`picker` FROM picker WHERE `no_transfer` = '".$value['no_transfer']."' ")->result_array();
		$inventory[] = $data;
		}
		$inventory['datapicker'] = $inventory;
		// print_r($inventory['datapicker']);
		$this->load->view('header');
		$this->load->view('pickers',$inventory);
		$this->load->view('footer');
	}
	public function picking($scanner)
	{
		$data['datadelivery'] = $this->db->where('no_transfer',$scanner)->get('picker')->result_array();
		
		$this->load->view('header');
		$this->load->view('picking',$data);
		$this->load->view('footer');
	}
	public function pickingview($scanner)
	{
		$data['datadelivery'] = $this->db->where('no_transfer',$scanner)->get('picker')->result_array();
		
		$this->load->view('header');
		$this->load->view('pickingview',$data);
		$this->load->view('footer');
	}

}
