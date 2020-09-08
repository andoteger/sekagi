<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('m_data');
		$data['popular'] = $this->m_data->poster_populer()->result();
		$data['post'] = $this->m_data->tampil_data()->result();
		
		$this->load->view('template/header');
		$this->load->view('index',$data);
		$this->load->view('template/footer');
	}
}
