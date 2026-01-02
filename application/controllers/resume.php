<?php
 class Resume extends CI_Controller {
     public function index()
     {
         $this->load->view('templates/header');
         $this->load->view('resume');
         $this->load->view('templates/footer');
     }
 }