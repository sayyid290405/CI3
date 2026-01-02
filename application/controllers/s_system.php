<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class S_System extends CI_Controller {
	public function index()
	{

		$this->load->view('templates/header');
		$this->load->view('services/s_system');
		$this->load->view('templates/footer');
	}
}
