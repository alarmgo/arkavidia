<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

    public function index()
    {
        $this->load->view('artikel');
    }

    public function ar1()
    {
        $this->load->view('ar1');
    }

}

/* End of file Artikel.php */
