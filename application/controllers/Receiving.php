<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Receiving extends CI_Controller {
	
	public function __construct()
  	{
		parent::__construct();
		$this->load->model('Model_receiving');
    }

	public function index()
	{
		$this->load->view('header');
		$this->load->view('receiving');
		$this->load->view('footer');
	}

	public function insert(){
		$data = array(
			'scanner_lot' 	=> $this->input->post('scanner_lot'),
			'series' 		=> $this->input->post('series'),
			'ref_upn' 		=> $this->input->post('ref_upn'),
			'pickup_name'	=> $this->input->post('pickup_name'),
			'lot_no'		=> $this->input->post('lot_no'),
			'qty'			=> $this->input->post('qty'),
			'description'	=> $this->input->post('description'),
			'tgl_masuk'		=> $this->input->post('datetime')
			);

		$this->Model_receiving->input_data($data,'receiving');
		redirect('binner');
	}

	public function data_rack($rack){
	
	}

}
