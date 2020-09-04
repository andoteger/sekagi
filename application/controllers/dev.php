<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dev extends CI_Controller {

	public function index()
	{
		$this->load->view('home/template/header');
		$this->load->view('develop');
		$this->load->view('home/template/footer');
	}
}
