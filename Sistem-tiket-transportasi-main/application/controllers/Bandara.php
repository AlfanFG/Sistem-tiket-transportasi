<?php  
	/**
	* 
	*/
	class Bandara extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('M_Bandara');
		}

		function index(){
			$data['d_bandara'] = $this->M_Bandara->getDataBandara();
			// $data['d_transp'] = $this->M_Bandara->getDataTransp();
			// $data['kode'] = $this->M_Bandara->StasiunID();
			$data['user'] = $this->session->userdata('username');
			
			$this->load->view('view-bandara',$data);
		}

		function insert(){
			if($this->input->post()){
				$this->M_Bandara->insertBandara();
				echo "Data Inserted";
			}
		}

		function edit(){
			$id = $this->input->post('bandara');
			
			$data = array(

				
				'name' => $this->input->post('Nama'),
				'city' => $this->input->post('city'),
				'abbr' => $this->input->post('abbr')


			);
			$this->M_Bandara->editStasiun($data,$id);
			$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert">Data Berhasil diubah <button type="button" class="Close" data-dissmiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('Bandara');
		}

		function Delete($id){
			$this->M_Bandara->Delete($id);
			redirect('Bandara');
		}

		function KodeBandara($abbr){
			$abbr = strtoupper(substr($abbr, 0,3));
			$kode = $this->M_Bandara->BandaraID($abbr);

			echo $kode;
		}

	}
 ?>