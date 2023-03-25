<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	
	public function index()
	{
		$this->load->view('website/homepage');
	}
	public function contact()
	{
		$this->load->view('website/contact_us');
	}
	public function saveContact()
	{
		$data = $_POST;
		// print_r($data); exit();
		$this->db->insert('contact_us',$data);
        $this->session->set_flashdata('confirm','Feedback Successfull !!');
        return redirect('Web/contact');
	}
	
}
