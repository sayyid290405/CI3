<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class S_ui_ux extends CI_Controller {
	public function index()
	{

		$this->load->view('templates/header');
		$this->load->view('services/s_ui_ux');
		$this->load->view('templates/footer');
	}
}
