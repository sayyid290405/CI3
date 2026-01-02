<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class S_cloud extends CI_Controller {
	public function index()
	{

		$this->load->view('templates/header');
		$this->load->view('services/s_cloud');
		$this->load->view('templates/footer');
	}
}
