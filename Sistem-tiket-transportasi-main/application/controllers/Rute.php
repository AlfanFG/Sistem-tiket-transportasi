<?php  
	/**
	* 
	*/
	class Rute extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('M_Rute');
		}

		function index(){
			$data['d_rute'] = $this->M_Rute->getDataRute();
			$data['d_rutep'] = $this->M_Rute->getDataRutep();
			$data['d_transp'] = $this->M_Rute->getDataTransp();
			$data['kode'] = $this->M_Rute->RuteId();
			$data['stasiundata'] = $this->M_Rute->getlist();
			$data['airportdata'] = $this->M_Rute->getlistBandara();
			$data['user'] = $this->session->userdata('username');
			 $rut = $this->M_Rute->get_list_rute();

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



        $opt = array('' => 'All Rute');
        foreach ($rut as $rute_to) {
            $opt[$rute_to] = $rute_to;
        }
        
        $data['rute_to'] = form_dropdown('',$opt,'','id="tujuan" name="rute_to" class="form-control"');
         $data['rute_from'] = form_dropdown('',$opt,'','id="dari" name="rute_from" class="form-control"');


			$this->load->view('view-rute',$data);
		}


		function insert(){
			if($this->input->post()){
				$this->M_Rute->insertRute();
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
			$this->M_Rute->editRute($data,$id);
			$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert">Data Berhasil diubah <button type="button" class="Close" data-dissmiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('Rute');
		}

		function Delete($id){
			$this->M_Rute->Delete($id);
			redirect('Rute');
		}

	}
 ?>