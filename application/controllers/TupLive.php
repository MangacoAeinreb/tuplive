<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tuplive extends CI_Controller {

	public function __construct(){
		parent::__construct();
	
	}
		
	public function index()
	{	


		$this->load->view('include/startup');

	}
	
	public function login()
	{
		$this->load->view('include/login');		
	}
	
	public function logged()
	{
		$this->load->view('include/Tliveface_logged');		
	}
