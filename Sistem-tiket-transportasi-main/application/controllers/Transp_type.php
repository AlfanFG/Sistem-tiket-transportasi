<?php  
	/**
	* 
	*/
	class Transp_type extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('M_Transportation_type');
		}

		function index(){
			$data['d_transp_type'] = $this->M_Transportation_type->getDataTransp_type();
			$data['kode'] = $this->M_Transportation_type->NoTrans_type();
			$data['user'] = $this->session->userdata('username');
			$this->load->view('view-transportation_type.php',$data);
		}

		function insert(){
			if($this->input->post()){
				$this->M_Transportation_type->insertTransp_type();
				echo "Data Inserted";
			}
		}

		function edit(){
			$id = $this->input->post('tipe');
			$data = array(

				'description' => $this->input->post('desc'),

			);
			$this->M_Transportation_type->editTransp_type($data,$id);
			$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert">Data Berhasil diubah <button type="button" class="Close" data-dissmiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('Transp_type');
		}

		function Delete($id){
			$this->M_Transportation_type->Delete($id);
			redirect('Transp_type');
		}

	}
 ?>