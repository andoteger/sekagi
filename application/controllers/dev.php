<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dev extends CI_Controller {

	public function index()
	{
		$this->load->model('m_data');
		$data['user'] = $this->m_data->tampil_data()->result();
		
		$this->load->view('template/header');
		$this->load->view('developer/develop',$data);
		$this->load->view('template/footer');
	}

	public function crud()
	{
		$this->load->view('template/header');
		$this->load->view('developer/crud');
		$this->load->view('template/footer');
	}
}
