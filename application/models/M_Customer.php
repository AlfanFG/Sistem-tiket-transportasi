<?php 
	/**
	* 
	*/
	class M_Customer extends CI_Model
	{
			
		function __construct()
		{
			parent::__construct();
		}

		function getDataCustomer(){
			$query = $this->db->get('customer');

			return $query->result_array();
		}

		function NoCus(){
	// $tahun_sekarang = date('Y');

	$query = $this->db->query(
		"SELECT IFNULL(MAX(SUBSTRING(customerid,5)),0)+1 AS no_urut FROM customer");
	$data = $query->row_array();
	$no_urut = sprintf("%'.04d",$data['no_urut']);

	$NoCus = 'CU'.$no_urut;
	// print_r($NoPasien);
	
	return $NoCus;
	
}

		function insertCustomer(){
			$NoCus = $this->NoCus();
			
			$data = array(
				'customerid' => $NoCus,
				'name' => $this->input->post('Nama'),
				'address' => $this->input->post('address'),
				'phone' => $this->input->post('phone'),
				'gender' => $this->input->post('gender')

				);
			$this->db->insert('customer',$data);
		}

		function editCustomer($data, $id){
			$this->db->where('customerid',$id);
			$this->db->update('customer',$data);
			return TRUE;

		}

		function Delete($id){
			$this->db->query("DELETE FROM customer WHERE customerid = '".$id."'");
		}
	
}

	


 ?>