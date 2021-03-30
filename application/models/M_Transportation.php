<?php 
	/**
	* 
	*/
	class M_Transportation extends CI_Model
	{
			
		function __construct()
		{
			parent::__construct();
		}

		function getDataTransportation(){
			$query = $this->db->get('Transportation');

			return $query->result_array();
		}

		function getDataTransp_type(){
			$query = $this->db->get('transportation_type');

			return $query->result_array();
		}

		function Trans(){
	// $tahun_sekarang = date('Y');

	$query = $this->db->query(
		"SELECT IFNULL(MAX(SUBSTRING(transportationid,5)),0)+1 AS no_urut FROM transportation");
	$data = $query->row_array();
	$no_urut = sprintf("%'.04d",$data['no_urut']);

	$Trans = 'TR'.$no_urut;
	// print_r($NoPasien);
	
	return $Trans;
	
}

		function insertTransportation(){
			$Trans = $this->Trans();
			
			$data = array(
				'transportationid' => $this->input->post('tid'),
				'code' => $this->input->post('code'),
				'description' => $this->input->post('desc'),
				'seat_qty' => $this->input->post('seat'),
				'transportation_typeid' => $this->input->post('ttid'),

				);
			$this->db->insert('transportation',$data);
		}

		function editTransportation($data, $id){
			$this->db->where('transportationid',$id);
			$this->db->update('transportation',$data);
			return TRUE;

		}

		function Delete($id){
			$this->db->query("DELETE FROM transportation WHERE transportationid = '".$id."'");
		}
	
}

	


 ?>