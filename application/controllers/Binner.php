<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Binner extends CI_Controller {

	public function __construct()
  	{
		parent::__construct();
		$this->load->model('Model_binner');
    }

	public function index()
	{
		$data['databinner'] = $this->Model_binner->getdata_forbinner();

		$this->load->view('header');
		$this->load->view('binner',$data);
		$this->load->view('footer');
	}

	public function binning($id){

		$asset['sections'] = $this->db->get_where('receiving', array('id' => $id))->result_array();

		$this->load->view('header');
		$this->load->view('binning',$asset);
		$this->load->view('footer');	
	}

	public function binner_view($scanner_upn){
		$asset['sections'] = $this->db->get_where('binner', array('scanner_upn' => $scanner_upn))->result_array();

		$this->load->view('header');
		$this->load->view('binner_view',$asset);
		$this->load->view('footer');
	}
	public function add_data(){
		$rack = $this->input->post('rack');;
	
		for ($i=0; $i < count($rack) ; $i++) { 
			$data = array(
				'scanner_upn'=> $_POST['scanner_upn'],
				'series'	=> $_POST['nameseries'],
				'rack'		=> $_POST['rack'][$i],
				'ref_upn'	=> $_POST['ref-upn'][$i],
				'lot_no'	=> $_POST['lot-no'][$i],
				'qty'		=> $_POST['qty'][$i],
				'binner'	=> $_POST['binner'],
				'tgl_input'	=> date('Y-d-m')
			);
			$this->Model_binner->add_torack('binner',$data);
		}
		redirect('binner');
		
	}
}
