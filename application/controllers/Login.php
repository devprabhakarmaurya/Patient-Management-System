<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function index()
	{
		$this->load->view('website/home');
	}
	
	public function login()
	{
		$this->load->view('admin/login');
	}
	
	public function register()
	{
		$this->load->view('admin/register');
	}
	
}
