<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller {
	public function index()
	{
		$this->load->view('Mahasiswa/tampilan_register');
	}

	public function Daftar()
	{
		$this->load->view('Mahasiswa/daftar');
	}
}
