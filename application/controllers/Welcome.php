<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Welcome extends CI_Controller {
		 public function __construct() {
	        parent::__construct();
	        date_default_timezone_set('Asia/Calcutta');
	        session_start();
	    }
		public function index()
		{
			if (empty($_SESSION['id'])) {
	            $this->login();
	        } else {
				$data['title'] = 'Test Me Hire Me';
				$this->load->view('header',$data);
				$this->load->view('welcome_message');
				$this->load->view('footer');
			}
		}	
		public function login()
		{
		 	$data['title'] = 'Test Me Hire Me - Login';
			$this->load->view('header',$data);
			$this->load->view('login');
			$this->load->view('footer');
		}
		public function logout() {
	        Session_unset();   
	        echo "logout";
	        // redirect("welcome/login", 'refresh');
	    }	
	}
?>