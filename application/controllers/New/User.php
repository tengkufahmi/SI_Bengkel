<?php

class User extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model("m_user");
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		$data["user"] = $this->m_user->getAll();
		$this->load->view('data-user', $data);
	}
}