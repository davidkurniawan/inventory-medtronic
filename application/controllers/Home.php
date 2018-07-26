<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('admin');
    }

	public function index()
	{

		if($this->admin->logged_id())
        {

            $data['inventory_qty'] = $this->db->query("SELECT SUM(qty) FROM binner")->result_array();
			$data['jumlah_rack'] = $this->db->query("SELECT COUNT(DISTINCT rack) AS jumlahrack FROM binner")->result_array();
			$this->load->view('header');
			$this->load->view('home_view',$data);
			$this->load->view('footer');

        }else{
        	redirect("login");
        }
		
	}

	public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

}
