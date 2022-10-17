<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	 
	public function index()
	{
		 
		$this->load->view('themes/index');
		 
	}
	public function theme1()
	{
		 
		$this->load->view('themes/index');
		 
	}
	public function theme2()
	{
		 
		$this->load->view('themes/theme_2');
		 
	}
	public function theme3()
	{
		 
		$this->load->view('themes/theme_3');
		 
	}
	public function theme4()
	{
		 
		$this->load->view('themes/theme_4');
		 
	}

	 


}
