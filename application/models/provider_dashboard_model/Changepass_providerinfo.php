<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Changepass_providerinfo extends CI_Model {

	function getAll(){
		$id=$this->session->userdata('id1');
		return $this->db->get_where('job_provider',array('id'=>$id))->row();
	}
	
	function changepass($id){
		// $arr['password'] = $this->input->post('NewPass');
		$arr['password'] = $this->encryption->encrypt($this->input->post('NewPass'));

		

		$this->db->where(array('id'=>$id));
		return $this->db->update('job_provider',$arr);
	}
	
	
}
