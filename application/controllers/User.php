<?php 

	/**
	* 
	*/
	class User extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('M_User');
		}

		function index(){
			if($this->session->userdata('level')=='admin'){
   
			$data['d_user'] = $this->M_User->getDataUser();
			$data['user'] = $this->session->userdata('username');
			$this->load->view('view-user.php',$data);
		}else{

			echo "<script>alert('Anda Tidak Memiliki Akses untuk Mengakses halaman ini');history.go(-1);</script>";
		}
	}

		function insert(){
			if($this->input->post()){
				$this->M_User->insertUser();
				echo "Data Inserted";
			}
		}

		function edit(){
			$id = $this->input->post('id');
			$data = array(

				'username' => $this->input->post('username'),
				'password' => $this->input->post('pass'),
				'fullname' => $this->input->post('fullname'),
				'level' => $this->input->post('level')

			);
			$this->M_User->editUser($data,$id);
			$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert">Data Berhasil diubah <button type="button" class="Close" data-dissmiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('User');
		}

		function Delete($id){
			$this->M_User->Delete($id);
			redirect('User');
		}

	}
 ?>