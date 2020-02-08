<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

    public function index()
    {
        $this->load->view('artikel');
    }

    public function ar1()
    {
        $this->load->view('artikel/ar1');
    }

    public function ar2()
    {
        $this->load->view('artikel/ar2');
    }

    public function ar3()
    {
        $this->load->view('artikel/ar3');
    }

    public function ar4()
    {
        $this->load->view('artikel/ar4');
    }

    public function ar5()
    {
        $this->load->view('artikel/ar5');
    }

}

/* End of file Artikel.php */
