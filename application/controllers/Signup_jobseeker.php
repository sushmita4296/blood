<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup_jobseeker extends CI_Controller {

	// function __construct(){
		
	// }
	
	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('signup_jobseeker');
		$this->load->view('footer');
	}
	
}
