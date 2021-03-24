<?php 
	/**
	* 
	*/
	class Home extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			if ($this->session->userdata('username')=="") {
			redirect('Login');
		}
		$this->load->helper('text');
		}

		function index(){
		
			$data['user'] = $this->session->userdata('username');
			$this->load->view('view-home',$data);
		}
	}
 ?>