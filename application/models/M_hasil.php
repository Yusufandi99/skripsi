<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_hasil extends CI_Model {

         public function __construct()
    {
        $this->load->database();
    }

	function tampil_data(){
		return $this->db->get('hasil');
	}

}