<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aturan extends CI_Controller {

    function __construct(){
        parent::__construct();      
        $this->load->model('M_pengetahuan');
        $this->load->helper('url');

        if($this->session->userdata('level') == "" | $this->session->userdata('level') == "user"){
                $this->session->set_flashdata('pesan', '<p class="text-center alert alert-warning" role="alert">Anda Harus Login Sebagai Admin !</p>');
                redirect('Auth');
              }
       
}

	public function index()
	{
        $data["aturan"] = $this->M_pengetahuan->tampil_data()->result_array();
        $this->load->view('admin/aturan',$data);   
	}
   
}
