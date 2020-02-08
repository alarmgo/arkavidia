<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buatpesanan extends CI_Controller
{

	public function index()
	{
		$this->load->view('Buatpesanan');
	}
	public function konfirmasi()
	{
		$this->load->view('KonfirmasiPembayaran');
	}
}
