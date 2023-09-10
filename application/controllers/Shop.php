<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

    public function index()
    {
        $data = array(
            'title' => '', 
            'isi' => 'v_shop', 
        );
        $this->load->view('layout/v_wrapper_shop', $data, FALSE);
        
    }

}

/* End of file Home.php */
