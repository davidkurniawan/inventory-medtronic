<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends CI_Controller {

	public function __construct()
  	{
		parent::__construct();
		$this->load->model('Model_inventory');
    }

	public function index()
	{
		$rack = $this->db->query('SELECT DISTINCT rack FROM binner;')->result_array();
		$inventory = array();
		foreach ($rack as $key => $value) {
			$data = $this->db->query('SELECT COUNT(*) AS inventory_rack FROM binner WHERE rack = "'.$value['rack'].'";')->result_array();
				foreach ($data as $key => $data_rack) {
					$inventory[] = $data_rack;
				}
		}
		if (!empty($_GET['inventory'])) {
		$data['inventory_aktif'] = $_GET['inventory'];
		}
		$data['rack'] = $rack;
		$data['qty_rack'] = $inventory;
		$data['inventory'] = $this->Model_inventory->getdata_inventory();

		$this->load->view('header');
		$this->load->view('inventory',$data);
		$this->load->view('footer');
	}
}
