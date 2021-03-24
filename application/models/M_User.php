<?php 
	/**
	* 
	*/
	class M_User extends CI_Model
	{
			
		function __construct()
		{
			parent::__construct();
		}

		function getDataUser(){
			$query = $this->db->get('user');

			return $query->result_array();
		}

		function createNoUser(){
	// $tahun_sekarang = date('Y');

	$query = $this->db->query(
		"SELECT IFNULL(MAX(SUBSTRING(userid,5)),0)+1 AS no_urut FROM user");
	$data = $query->row_array();
	$no_urut = sprintf("%'.04d",$data['no_urut']);

	$NoPeg = 'US'.$no_urut;
	// print_r($NoPasien);
	
	return $NoPeg;
	
}

		function insertUser(){
			$NoPeg = $this->createNoUser();
			
			$data = array(
				'userid' => $NoPeg,
				'username' => $this->input->post('username'),
				'password' => $this->input->post('pass'),
				'fullname' => $this->input->post('fullname'),
				'level' => $this->input->post('level')

				);
			$this->db->insert('user',$data);
		}

		function editUser($data, $id){
			$this->db->where('userid',$id);
			$this->db->update('user',$data);
			return TRUE;

		}

		function Delete($id){
			$this->db->query("DELETE FROM user WHERE userid = '".$id."'");
		}
	
}

	


 ?>