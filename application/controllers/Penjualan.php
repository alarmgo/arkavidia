<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {

	public function index()
	{
		$this->load->view('InputDataPenjualan');
	}
}