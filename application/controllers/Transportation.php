<?php  
	/**
	* 
	*/
	class Transportation extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('M_Transportation');
		}

		function index(){
			$data['d_transportation'] = $this->M_Transportation->getDataTransportation();
			$data['d_transp_type'] = $this->M_Transportation->getDataTransp_type();
			$data['kode'] = $this->M_Transportation->Trans();
			$data['user'] = $this->session->userdata('username');
			$this->load->view('view-transportation.php',$data);
		}

		function insert(){
			if($this->input->post()){
				$this->M_Transportation->insertTransportation();
				echo "Data Inserted";
			}
		}

		function edit(){
			$id = $this->input->post('tid');
			$data = array(

				'code' => $this->input->post('code'),
				'description' => $this->input->post('desc'),
				'seat_qty' => $this->input->post('seat'),
				'transportation_typeid' => $this->input->post('ttid'),


			);
			$this->M_Transportation->editTransportation($data,$id);
			$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert">Data Berhasil diubah <button type="button" class="Close" data-dissmiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('Transportation');
		}

		function Delete($id){
			$this->M_Transportation->Delete($id);
			redirect('Transportation');
		}

	}
 ?>