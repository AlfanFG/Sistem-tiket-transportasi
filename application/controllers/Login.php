<?php 
 
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('M_Login');
 
	}
 
	function index(){
		$this->load->view('view-login');
	}
 
	function cek_login() {
		$data = array('username' => $this->input->post('username', TRUE),
						'Password' => $this->input->post('password', TRUE)
			);
		
		$hasil = $this->M_Login->cek_user($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['username'] = $sess->username;
				$sess_data['level'] = $sess->level;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('level')== 'admin') {
				redirect('Home');
			}
			elseif ($this->session->userdata('level')=='operator') {
				redirect('Home');
			}		
		}
		else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}

	function logout(){
		 $this->session->sess_destroy();
		 redirect('Login');
	}

}
