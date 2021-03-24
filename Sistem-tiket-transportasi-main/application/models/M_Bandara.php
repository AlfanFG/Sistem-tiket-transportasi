<?php 
	/**
	* 
	*/
	class M_Bandara extends CI_Model
	{
			
		function __construct()
		{
			parent::__construct();
		}

		function getDataBandara(){
			$query = $this->db->get('bandara');
					$this->db->order_by('bandaraid','desc');
					
			return $query->result_array();
		}

		// function getDataTransp(){
		// 	$query = $this->db->get('transportation');

		// 	return $query->result_array();
		// }
 		
		function BandaraID($abbr){
	// $tahun_sekarang = date('Y');

	$query = $this->db->query(
		"SELECT IFNULL(MAX(SUBSTRING(bandaraid,8)),0)+1 AS no_urut FROM bandara");
	$data = $query->row_array();
	$no_urut = sprintf("%'.03d",$data['no_urut']);

	$bandaraid = 'BU'.$abbr.$no_urut;
	// print_r($NoPasien);
	
	return $bandaraid;
	
}

		function insertBandara(){
			$bandaraid = $this->BandaraID();
			
			$data = array(
				'bandaraid' => $this->input->post('bandara'),
				'name' => $this->input->post('Nama'),
				'city' => $this->input->post('city'),
				'abbr' => $this->input->post('abbr')
				

				);
			$this->db->insert('bandara',$data);
		}

		function editBandara($data, $id){
			$this->db->where('bandaraid',$id);
			$this->db->update('bandara',$data);
			return TRUE;

		}

		function Delete($id){
			$this->db->query("DELETE FROM bandara WHERE bandaraid = '".$id."'");
		}
	
}

	


 ?>