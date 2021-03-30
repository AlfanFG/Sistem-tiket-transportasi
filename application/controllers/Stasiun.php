<?php  
	/**
	* 
	*/
	class Stasiun extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('M_Stasiun');
		}

		function index(){
			$data['d_stasiun'] = $this->M_Stasiun->getDataStasiun();
			// $data['d_transp'] = $this->M_Stasiun->getDataTransp();
			// $data['kode'] = $this->M_Stasiun->StasiunID();
			$data['user'] = $this->session->userdata('username');
			
			$this->load->view('view-stasiun',$data);
		}

		function insert(){
			if($this->input->post()){
				$this->M_Stasiun->insertStasiun();
				echo "Data Inserted";
			}
		}

		function edit(){
			$id = $this->input->post('stasiun');
			
			$data = array(

				
				'name' => $this->input->post('Nama'),
				'city' => $this->input->post('city'),
				'abbr' => $this->input->post('abbr')


			);
			$this->M_Stasiun->editStasiun($data,$id);
			$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert">Data Berhasil diubah <button type="button" class="Close" data-dissmiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('Stasiun');
		}

		function Delete($id){
			$this->M_Stasiun->Delete($id);
			redirect('Stasiun');
		}

		function KodeStasiun($abbr){
			$abbr = strtoupper(substr($abbr, 0,3));
			$kode = $this->M_Stasiun->StasiunID($abbr);

			echo $kode;
		}

	}
 ?>