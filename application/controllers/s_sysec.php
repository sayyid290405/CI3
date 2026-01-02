<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class S_sysec extends CI_Controller {
	public function index()
	{

		$this->load->view('templates/header');
		$this->load->view('services/s_sysec');
		$this->load->view('templates/footer');
	}
}
