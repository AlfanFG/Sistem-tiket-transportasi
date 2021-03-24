<?php 
	/**
	* 
	*/
	class M_Rute_Pesawat extends CI_Model
	{
		var $table1 = 'bandara';
		function __construct()
		{
			parent::__construct();
		}

		function getDataRute(){
			$query = $this->db->get('rute');

			return $query->result_array();
		}
function getlist() {
    $this->db->select("bandaraid,name,city,abbr");
    $this->db->from('bandara');
    $this->db->order_by('bandaraid','asc');
    $query = $this->db->get();
    return $query;
}



		function getDataTransp(){
			$query = $this->db->get('transportation');

			return $query->result_array();
		}

		// public function getlistBandara()
  //   {
  //       $this->db->select('bandaraid');
  //       $this->db->from($this->table1);
  //       $this->db->order_by('bandaraid','asc');
  //       $query = $this->db->get();
  //       $result = $query->result();
 
  //       $rute = array();
  //       foreach ($result as $row) 
  //       {
  //           $rute[] = $row->stasiunid;

           			  
  //       }
  //       return $rute;
  //   }
		function RuteId(){
	// $tahun_sekarang = date('Y');

	$query = $this->db->query(
		"SELECT IFNULL(MAX(SUBSTRING(ruteid,5)),0)+1 AS no_urut FROM rute");
	$data = $query->row_array();
	$no_urut = sprintf("%'.04d",$data['no_urut']);

	$RuteId = 'RT'.$no_urut;
	// print_r($NoPasien);
	
	return $RuteId;
	
}

		function insertRute(){
			$RuteId = $this->RuteId();
			
			$data = array(
				'ruteid' => $RuteId,
				'depart_at' => $this->input->post('depart_at'),
				'rute_from' => $this->input->post('rute_from'),
				'rute_to' => $this->input->post('rute_to'),
				'price' => $this->input->post('price'),
				'transportationid' => $this->input->post('tid')

				);
			$this->db->insert('rute',$data);
		}

		function editRute($data, $id){
			$this->db->where('ruteid',$id);
			$this->db->update('rute',$data);
			return TRUE;

		}

		function Delete($id){
			$this->db->query("DELETE FROM rute WHERE ruteid = '".$id."'");
		}
	
}

	


 ?>