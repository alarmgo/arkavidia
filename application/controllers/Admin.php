<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('M_Admin');
	}
	public function index()
	{
		$this->load->view('admin/index');
	}

	public function user()
	{
		$this->load->view('admin/user');
	}

	public function hapus($id)
	{
		$where = array('id' => $id);
		$this->M_Admin->hapus_data($where,'user');
		redirect('admin/user');
	}
}
