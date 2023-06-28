<?php
class Home extends CI_Controller{
		function register(){
		$this->load->view("register");
	}
	 

 function login(){
		$this->load->model("UserModel");
		if($this->UserModel->login()->num_rows>0){
			$session_data = array(
				"login" => true,
				"username" => $this->input->post("username")
			);
			$this->session->set->_userdata($session_data);
			redirect(site_url("home"));
		}else{
			$this->session->set_flashdata("error","Username atau Password salah");
			redirect(site_url("home"));
		}
	}


	function index(){
		if($this->session->userdata('login')){
			$this->load->view("home");
		}else{
			$this->load->view("login");
		}
	}



}
?>

