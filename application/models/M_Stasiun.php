<?php 
	/**
	* 
	*/
	class M_Stasiun extends CI_Model
	{
			
		function __construct()
		{
			parent::__construct();
		}

		function getDataStasiun(){
			$query = $this->db->get('stasiun');
					$this->db->order_by('stasiunid','desc');
					
			return $query->result_array();
		}

		// function getDataTransp(){
		// 	$query = $this->db->get('transportation');

		// 	return $query->result_array();
		// }
 
		function StasiunID($abbr){
	// $tahun_sekarang = date('Y');

	$query = $this->db->query(
		"SELECT IFNULL(MAX(SUBSTRING(stasiunid,8)),0)+1 AS no_urut FROM stasiun");
	$data = $query->row_array();
	$no_urut = sprintf("%'.04d",$data['no_urut']);

	$stasiunid = 'ST'.$abbr.$no_urut;
	// print_r($NoPasien);
	
	return $stasiunid;
	
}

		function insertStasiun(){
			$stasiunid = $this->StasiunID();
			
			$data = array(
				'stasiunid' => $this->input->post('stasiun'),
				'name' => $this->input->post('Nama'),
				'city' => $this->input->post('city'),
				'abbr' => $this->input->post('abbr')
				

				);
			$this->db->insert('stasiun',$data);
		}

		function editStasiun($data, $id){
			$this->db->where('stasiunid',$id);
			$this->db->update('stasiun',$data);
			return TRUE;

		}

		function Delete($id){
			$this->db->query("DELETE FROM stasiun WHERE stasiunid = '".$id."'");
		}
	
}

	


 ?>