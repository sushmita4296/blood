<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Provider_dashboard extends CI_Controller {

	public function __construct()
	 {
	  parent::__construct();
	  if(!$this->session->userdata('id1'))
	  {
	   redirect('jobprovider/provider');
	  }
	 }
	
	
	public function index()
	{
		$this->load->view('Provider_dashboard_view/header');
		$this->load->view('Provider_dashboard_view/dashboard_home');
		$this->load->view('Provider_dashboard_view/sidebar');
	}
	function logout()
	{
		$data = $this->session->all_userdata();
		foreach($data as $row => $rows_value)
		{
			$this->session->unset_userdata($row);
		}
		redirect('jobprovider/provider');
		}
	}
	
