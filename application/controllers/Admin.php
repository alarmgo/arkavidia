<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('M_Admin');
		$this->load->helper('url');
		
	}
	public function index()
	{
		$data['user'] = $this->M_Admin->tampil_data()->result();
		$this->load->view('admin/index',$data);
	}

	public function user()
	{
		$this->load->view('admin/user');
	}

	public function tambah()
	{
		$this->load->view('admin/user_tambah');
	}

	public function tambah_aksi()
	{
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$data = array(
			'nama' => $nama,
			'email' => $email,
			'username' => $username,
			'password' => $password
		);
		$this->M_Admin->input_data($data,'user');
		redirect('admin/user');
	}

	public function hapus($id)
	{
		$where = array('id' => $id);
		$this->M_Admin->hapus_data($where,'user');
		redirect('admin/user');
	}
}
