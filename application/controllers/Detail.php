<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {


    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->model('m_shop');
    // }
    public function index()
    {
        $data = array(
            'title' => '',
            
            'isi' => 'v_detail_barang', 
        );
        $this->load->view('layout/v_wrapper_frontend2', $data, FALSE);
        
    }

}

/* End of file Home.php */
