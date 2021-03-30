<?php  
	/**
	* 
	*/
	class Customer extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('M_Customer');
		}

		function index(){
			$data['d_customer'] = $this->M_Customer->getDataCustomer();
			$data['kode'] = $this->M_Customer->NoCus();
			$data['user'] = $this->session->userdata('username');
			$this->load->view('view-customer.php',$data);
		}

		function insert(){
			if($this->input->post()){
				$this->M_Customer->insertCustomer();
				echo "Data Inserted";
			}
		}

		function edit(){
			$id = $this->input->post('cust');
			$data = array(

				'name' => $this->input->post('Nama'),
				'address' => $this->input->post('address'),
				'phone' => $this->input->post('phone'),
				'gender' => $this->input->post('gender')

			);
			$this->M_Customer->editCustomer($data,$id);
			$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert">Data Berhasil diubah <button type="button" class="Close" data-dissmiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('Customer');
		}

		function Delete($id){
			$this->M_Customer->Delete($id);
			redirect('Customer');
		}

	}
 ?>