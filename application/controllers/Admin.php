<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    

    public function index()
	{
		 
		 
		$this->load->view('back/header');
		$this->load->view('back/index');
		$this->load->view('back/footer');
		 
	} 											 
  
}