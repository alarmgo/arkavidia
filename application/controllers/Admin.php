<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/index');
	}

	public function user()
	{
		
		$this->load->view('admin/user');
		
	}
}
