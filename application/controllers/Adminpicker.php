<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminpicker extends CI_Controller {

	public function __construct()
  	{
		parent::__construct();
		$this->load->model('Model_picker');
    }


	public function index()
	{	
		
		$this->load->view('header');
		$this->load->view('admin_picker');
		$this->load->view('footer');
	}

	public function delete_dataforpicker(){
		// print_r($_POST);
		$post = $this->input->post();
		$id = $post['vid'];
		$table = 'binner';
		$this->Model_picker->delete_databinner($id,$table);
	}
	public function add_topicker(){
		// print_r($_POST);
		$post = $this->input->post();
		$data = array(
			'series' 		=> $post['vseries'],
			'scanner_upn' 	=> $post['vscanner'],
			'ref_upn' 		=> $post['vrefupn'],
			'lot_no'			=> $post['vlot'],
			'qty'   		=> $post['vqty'],
			'rack'  		=> $post['vrack'],
			'status'		=> 'PROGRESS',
			'tgl_input'		=> date('Y-m-d'),
			'picker'		=> $post['vpicker'],
			'no_transfer'      => $post['vno_trans']
		);
		$this->Model_picker->input_datapicker($data,'picker');
	}

	public function delivery_itempicker()
	{
		print_r($_POST);
		$post = $this->input->post();
		$data = array(
			'scanner_upn'	=> $post['vscanner'],
			'series'		=> $post['vseries'],
			'ref_upn'		=> $post['vrefupn'],
			'lot_no'		=> $post['vlot'],
			'qty'			=> $post['vqty'],
			'admin'			=> $post['vadmin'],
			'status'		=> 'TERKIRIM',
			'deliveryto'	=> $post['vditujukan'],
			'tgl_input'		=> date('Y-m-d'),
			'no_transfer'	=> $post['vno_trans']
		);

		$this->Model_picker->send_itempicker($data,'delivery',$post['vscanner']);
	}
	public function search_forpicker(){
		$post = $this->input->post();
		$data['search_value'] = $this->Model_picker->search_data($post);
		 $html  = '';
         $html .= '<table id="examplepicker" class="table table-bordered table-hover">';
         $html .= '<thead>';
         $html .= '<tr>';
         $html .= '<th>ID</th>';
         $html .= '<th>Name Series</th>';
         $html .= '<th>ScannerUpn</th>';
         $html .= '<th>Upn</th>';
         $html .= '<th>Lot No</th>';
         $html .= '<th>QTY</th>';
         $html .= '<th>Rack</th>';
         $html .= '<th>Action</th>';
	     $html .= '</tr>';
		 $html .= '</thead>';
		 $html .= '<tbody>';
		 foreach ($data['search_value'] as $value) {
		 	foreach ($value as $key => $datapicker) {
		 	
         $html .= '<tr>';
         $html .= '<td>'.$datapicker['id'].'</td>';
         $html .= '<td>'.$datapicker['series'].'</td>';
         $html .= '<td>'.$datapicker['scanner_upn'].'</td>';
         $html .= '<td>'.$datapicker['ref_upn'].'</td>';
         $html .= '<td>'.$datapicker['lot_no'].'</td>';
         $html .= '<td>'.$datapicker['qty'].'</td>';
         $html .= '<td>'.$datapicker['rack'].'</td>';
         $html .= '<td>
	               <button class="btn btn-picker btn-primary btn-sm" onclick="myFunction()">Add</button>
	               </td>';
	     $html .= '</tr>';  
	     	}        
		 }
         $html .= '</tbody>';
         $html .= '<tfoot>';   
         $html .= '<tr>';   
         $html .= '<th>ID</th>'; 
         $html .= '<th>Name Series</th>';
         $html .= '<th>ScannerUpn</th>';
         $html .= '<th>Upn</th>';
         $html .= '<th>Lot No</th>';               
         $html .= '<th>QTY</th>';
         $html .= '<th>Rack</th>';
         $html .= '<th>Action</th>';
         $html .= '</tr>';               
         $html .= '</tfoot>';
         $html .= '</table>';           
         
         echo $html;
                                        
	}
}
