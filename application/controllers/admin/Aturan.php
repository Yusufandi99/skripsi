<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aturan extends CI_Controller {

    function __construct(){
        parent::__construct();      
        $this->load->model('M_pengetahuan');
        $this->load->helper('url');
       
}

	public function index()
	{
        $data["aturan"] = $this->M_pengetahuan->tampil_data()->result_array();
        $this->load->view('admin/aturan',$data);   
	}
   
}
