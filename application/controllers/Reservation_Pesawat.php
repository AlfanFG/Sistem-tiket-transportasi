<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	* 
	*/
	class Reservation extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('M_Reservation');
            
            $this->load->library('form_validation');
            header("Expires: Thu, 19 Nov 1981 08:52:00 GMT"); //Date in the past
header("Cache-Control: no-cache, must-revalidate, post-check=0, pre-check=0"); //HTTP/1.1
header("Pragma: no-cache");

		}

		public function index(){
			$this->load->helper('url');
            $this->load->helper('form');
			$data['user'] = $this->session->userdata('username');
			$rut = $this->M_Reservation->get_list_rute();
            $data['stasiundata'] = $this->M_Reservation->getlist();
            $data['airportdata'] = $this->M_Reservation->getlistPesawat();
  
        // $opt = array('' => 'All Rute');
        // foreach ($rut as $rute_from) {
        //     $opt[$rute_from] = $rute_from;
        // }
        
        // $data['rute_from'] = form_dropdown('',$opt,'','id="tujuan" class="form-control"');
        $this->load->view('view-reservation', $data);
		}

        

		function booking(){

                $data['dewasas'] = $this->input->post('dewasas');
                $data['price'] = $this->input->post('price');
                $data['depart'] = $this->input->post('depart');
                $data['rute_from']  = $this->input->post('rute_from');
                $data['rute']  = $this->input->post('rid');
                $data['id'] = $this->input->post('rute_from');
                $rid = $this->input->post('rute_to');
                $data['rute_to'] = $this->input->post('rute_to');
                $data['desk'] = $this->input->post('desk');
                $des = $this->input->post('desk');
                $this->M_Reservation->getSeat($des);
               
           
            $data['to'] = $this->M_Reservation->stasiunto($rid);
            $data['seatqty'] = $this->M_Reservation->getSeat($des);
            $data['user'] = $this->session->userdata('username');
//            $this->session->set_flashdata('item');
            $data['kode'] = $this->input->post('shit');
            $data['random_code'] = $this->M_Reservation->generateRandomString();
        $data['idreservation'] = $this->M_Reservation->get_idreservation();
        // $data['SeatCode'] = $this->M_Reservation->get_seat();
        $data['stasiundata'] = $this->M_Reservation->getlist();


    
    $querySeatCode = $this->db->query("SELECT seat_code FROM reservation where ruteid ='".$this->input->post('rid')."'");

    $data['result'] = $querySeatCode->result_array();

            // if($this->input->post('btnShowNew')){
            //     $this->M_Reservation->insertSeat($data['kode']);

            // }
           
$this->load->view('view-book',$data);
		
	}

    

    function rute_fromp($rute_fromp){
        $data['airportdata'] = $this->M_Reservation->getBandara($rute_fromp)->result();

        foreach ($data['stasiun'] as $key) {
            $key->name;
            return $key->name. " (".$key->abbr.") ".$key->city;
        }
          
    }

    function rute_top($rute_top){
        $data['airportdata'] = $this->M_Reservation->getBandarato($rute_top)->result();

        foreach ($data['stasiunto'] as $key) {
            $key->name;
            return $key->name. " (".$key->abbr.") ".$key->city;
        }
          
    }

    function simpan(){
      if($this->input->post()){
        $this->M_Reservation->prosesorder();
        $data['pesan'] = $this->input->post();
        $data['name'] = $this->input->post('nama[]');
        // echo "Input Berhasil";
       $query = $this->db->query("SELECT code FROM transportation where description = '".$this->input->post('desk')."'");
      $data['hasil'] = $query->result_array();
        $data['user'] = $this->session->userdata('username');
        $this->load->view('view-payment',$data);
        

       
}else{
echo "denied";
}
}

    function payment(){

        $this->load->view('view-payment');
    }

    // function seat_code(){
        

    //    $this->load->view('view')
    // }

		

		
 
		public function ajax_list(){
			$list = $this->M_Reservation_P->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $Reservation) {
            $no++;
             $row = array();
            $row[] = $no;
            $row[] = $Reservation->ruteid;
            $row[] = $Reservation->depart_at;
            $row[] = $Reservation->rute_from;
            $row[] = $Reservation->rute_to;
            $row[] = $Reservation->description;
      
            $row[] = 'Rp.'.$Reservation->price."<br><button type='button' class='btn btn-md btn-info pilih' style='width:100px; text-align: center;'>Pilih</button>";
                  $row[] = $Reservation->transportationid;
 
 
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->M_Reservation_P->count_all(),
                        "recordsFiltered" => $this->M_Reservation_P->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
		}

		

	}
 ?>