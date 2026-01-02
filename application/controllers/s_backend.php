<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class S_backend extends CI_Controller {
	public function index()
	{

		$this->load->view('templates/header');
		$this->load->view('services/s_backend');
		$this->load->view('templates/footer');
	}
}
