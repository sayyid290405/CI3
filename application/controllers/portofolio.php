<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portofolio extends CI_Controller {
	public function index()
	{

		$this->load->view('templates/header');
		$this->load->view('portofolio');
		$this->load->view('templates/footer');
	}
}
