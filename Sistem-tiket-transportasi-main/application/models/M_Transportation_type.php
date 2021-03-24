<?php 
	/**
	* 
	*/
	class M_Transportation_type extends CI_Model
	{
			
		function __construct()
		{
			parent::__construct();
		}

		function getDataTransp_type(){
			$query = $this->db->get('transportation_type');

			return $query->result_array();
		}

		function NoTrans_type(){
	// $tahun_sekarang = date('Y');

	$query = $this->db->query(
		"SELECT IFNULL(MAX(SUBSTRING(transportation_typeid,4)),0)+1 AS no_urut FROM transportation_type");
	$data = $query->row_array();
	$no_urut = sprintf("%'.04d",$data['no_urut']);

	$TransType = 'T'.$no_urut;
	// print_r($NoPasien);
	
	return $TransType;
	
}

		function insertTransp_type(){
			$TransType = $this->NoTrans_type();
			
			$data = array(
				'transportation_typeid' => $TransType,
				'description' => $this->input->post('desc')

				);
			$this->db->insert('transportation_type',$data);
		}

		function editTransp_type($data, $id){
			$this->db->where('transportation_typeid',$id);
			$this->db->update('transportation_type',$data);
			return TRUE;

		}

		function Delete($id){
			$this->db->query("DELETE FROM transportation_type WHERE transportation_typeid = '".$id."'");
		}
	
}

	


 ?>