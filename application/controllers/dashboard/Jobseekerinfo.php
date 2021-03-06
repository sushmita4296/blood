<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobseekerinfo extends CI_Controller {
		//news
	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('admin')){
			redirect('dashboard/Login');
		}
		$this->load->model('jobseekerinfo_model');
	}
	
	
	public function index()
	{
		
		$data['jobseekerdata'] = $this->jobseekerinfo_model->getAll();
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/jobseekerinfo_view',$data);
		$this->load->view('dashboard/sidebar');
	}
	function edit_view($id)
	{
		$data['jobseekerdata'] = $this->jobseekerinfo_model->getById($id);
		// $this->load->view('admin/news/edit',$data);
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/jobseekercrud/edit_view',$data);
	}

	function update($id)
	{
		$this->jobseekerinfo_model->update($id);
		$this->session->set_flashdata('success','Update successfully');
		redirect('dashboard/jobseekerinfo');
	}
	function delete($id)
	{
		$this->jobseekerinfo_model->delete($id);
		$this->session->set_flashdata('success','delete successfully');
		redirect('dashboard/jobseekerinfo');
	} 
	
}
