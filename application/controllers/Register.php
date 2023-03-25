<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	
	public function index()
	{
		$this->load->view('website/patient_register');
	}
	public function saveRecord()
	{
		$data = $_POST;
		$this->db->insert('patient_record',$data);
		// print_r($data); exit();
        $this->session->set_flashdata('success','Patient Registeration Successfull !!');
        return redirect('Register');
	}
}
