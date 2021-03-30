<?php  
	/**
	* 
	*/
	class Rute_Pesawat extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('M_Rute_Pesawat');
		}

		function index(){
			$data['d_rute'] = $this->M_Rute_Pesawat->getDataRute();
			$data['d_transp'] = $this->M_Rute_Pesawat->getDataTransp();
			$data['kode'] = $this->M_Rute_Pesawat->RuteId();
			$data['airportdata'] = $this->M_Rute_Pesawat->getlist();
			$data['user'] = $this->session->userdata('username');
			 

// Rute from ----------------------------------------------------------------------------------------------------------
// for ($i=0; $i < count($data['d_rute']); $i++) { 
// 	// print_r($data['d_rute'][$i]["rute_from"]);
// 	$query = $this->db->query("SELECT name,city,abbr from stasiun where stasiunid = '".$data['d_rute'][$i]["rute_from"]."'");
// 	$data[$i] = $query->result_array();
	
// $data['singkatanfrom'][$i] = $data[$i][0]["name"]." (".$data[$i][0]["abbr"].") ".$data[$i][0]["city"];
// }

// // Rute to ----------------------------------------------------------------------------------------------------------

// for ($i=0; $i < count($data['d_rute']); $i++) { 
// 	// print_r($data['d_rute'][$i]["rute_from"]);
// 	$query = $this->db->query("SELECT name,city,abbr from stasiun where stasiunid = '".$data['d_rute'][$i]["rute_to"]."'");
// 	$data[$i] = $query->result_array();
	
// $data['singkatanto'][$i] = $data[$i][0]["name"]." (".$data[$i][0]["abbr"].") ".$data[$i][0]["city"];
// }

        


			$this->load->view('view-rute_pesawat',$data);
		}


		function insert(){
			if($this->input->post()){
				$this->M_Rute_Pesawat->insertRute();
				echo "Data Inserted";
			}

		}

		function edit(){
			$id = $this->input->post('ruteid');
			
			$data = array(

				'ruteid' => $this->input->post('ruteid'),
				'depart_at' => $this->input->post('depart_at'),
				'rute_from' => $this->input->post('rute_from'),
				'rute_to' => $this->input->post('rute_to'),
				'price' => $this->input->post('price'),
				'transportation_id' => $this->input->post('tid')


			);
			$this->M_Rute_Pesawat->editRute($data,$id);
			$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert">Data Berhasil diubah <button type="button" class="Close" data-dissmiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('Rute');
		}

		function Delete($id){
			$this->M_Rute_Pesawat->Delete($id);
			redirect('Rute');
		}

	}
 ?>