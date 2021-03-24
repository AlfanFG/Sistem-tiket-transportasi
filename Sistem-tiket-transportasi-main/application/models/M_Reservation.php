<?php 
	/**
	* 
	*/
	class M_Reservation extends CI_Model
	{
		var $table1 = 'v_getkereta';
     

		var $column_order = array(null, 'depart_at','rute_from','rute_to','price','description','transportationid'); //set column field database for datatable orderable
   		var $column_search = array('depart_at','rute_from','rute_to','price','description','transportationid'); //set column field database for datatable searchable 
    	var $order = array('ruteid' => 'asc'); // default order 
//----------------------------------------------------------------------------------------------------------------------
    	var $table2 = 'v_getpesawat';
		var $column_order2 = array(null, 'depart_at','rute_from','rute_to','price','description','transportationid'); //set column field database for datatable orderable
   		var $column_search2 = array('depart_at','rute_from','rute_to','price','description','transportationid'); //set column field database for datatable searchable 
    	var $order2 = array('ruteid' => 'asc'); // default order

		function __construct()
		{

			parent::__construct();
			$this->load->database();
		}

// KERETA-------------------------------KERETA----------------------------------------------

		function _get_datatables_query(){
			if($this->input->post('dari'))
        {
            $this->db->where('rute_from', $this->input->post('dari'));
        }

       		if($this->input->post('tujuan'))
        {
            $this->db->like('rute_to', $this->input->post('tujuan'));
        }
       
 
        $this->db->from($this->table1);
        $i = 0;	
     
        foreach ($this->column_search as $item) // loop column 
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {
                 
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
         
        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
		
	public function get_datatables()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    public function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all()
    {
        $this->db->from($this->table1);
        return $this->db->count_all_results();
    }
 
    public function get_list_rute()
    {
        $this->db->select('rute_to');
        $this->db->from($this->table1);
        $this->db->order_by('rute_to','asc');
        $query = $this->db->get();
        $result = $query->result();
 
        $rute = array();
        foreach ($result as $row) 
        {
            $rute[] = $row->rute_to;
        }
        return $rute;
    }

    // Pesawat ---------------------------------------------------------------

    function _get_datatables_query2(){
			if($this->input->post('dari1'))
        {
            $this->db->where('rute_from', $this->input->post('dari1'));
        }

       		if($this->input->post('tujuan1'))
        {
            $this->db->like('rute_to', $this->input->post('tujuan1'));
        }
       
 
        $this->db->from($this->table2);
        $i = 0;	
     
        foreach ($this->column_search2 as $item) // loop column 
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {
                 
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search2) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
         
        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order2[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order2))
        {
            $order2 = $this->order2;
            $this->db->order_by(key($order2), $order2[key($order2)]);
        }
    }
		
	public function get_datatables2()
    {
        $this->_get_datatables_query2();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    public function count_filtered2()
    {
        $this->_get_datatables_query2();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all2()
    {
        $this->db->from($this->table2);
        return $this->db->count_all_results();
    }

    function stasiun($id){
      $query = $this->db->query("SELECT * FROM stasiun where stasiunid = '".$id."'");


        return $query->result_array();
    }

     function stasiunto($rid){
      $query = $this->db->query("SELECT * FROM stasiun where stasiunid = '".$rid."'");


        return $query->result_array();
    }

    function getBandara($rute_fromp){
    $query = $this->db->query("SELECT * FROM bandara where bandaraid = '".$rute_fromp."'");


        return $query;
    }

    function getBandarato($rute_top){
    $query = $this->db->query("SELECT * FROM bandara where bandaraid = '".$rute_top."'");


        return $query;
    }

    function getStasiun($rute_from){
    $query = $this->db->query("SELECT * FROM stasiun where stasiunid = '".$rute_from."'");


        return $query;
    }

    function getStasiunto($rute_to){
    $query = $this->db->query("SELECT * FROM stasiun where stasiunid = '".$rute_to."'");


        return $query;
    }



    function getlist() {
    $this->db->select("stasiunid,name,city,abbr");
    $this->db->from('stasiun');
    $this->db->order_by('name','asc');
    $query = $this->db->get();
    return $query;
}

    function getlistPesawat() {
    $this->db->select("bandaraid,name,city,abbr");
    $this->db->from('bandara');
    $this->db->order_by('name','asc');
    $query = $this->db->get();
    return $query;
}

    public function get_list_rute2()
    {
        $this->db->select('rute_from');
        $this->db->from($this->table2);
        $this->db->order_by('rute_from','asc');
        $query = $this->db->get();
        $result = $query->result();
 
        $rute = array();
        foreach ($result as $row) 
        {
            $rute[] = $row->rute_from;
        }
        return $rute;
    }

   function getSeat($des){
        $this->db->select('transportation.seat_qty');
$this->db->from('v_getkereta');
$this->db->join('transportation', 'v_getkereta.transportationid = transportation.transportationid');
$this->db->where('v_getkereta.transportationid', $des);

$query = $this->db->get();

return $query->result_array();
    }

    function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

    function insertSeat($kode){
        for($i = 0; $i<=$this->input->post('customer'); $i++){}
        $data = array(
            'seat_code' => $kode
        );
        $this->db->insert('reservation',$data);
    }

    function getBaseUrl() 
{
    // output: /myproject/index.php
    $currentPath = $_SERVER['PHP_SELF']; 
    
    // output: Array ( [dirname] => /myproject [basename] => index.php [extension] => php [filename] => index ) 
    $pathInfo = pathinfo($currentPath); 
    
    // output: localhost
    $hostName = $_SERVER['HTTP_HOST']; 
    
    // output: http://
    $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https://'?'https://':'http://';
    
    // return: http://localhost/myproject/
    return $protocol.$hostName.$pathInfo['dirname']."/";
}
function prosesorder(){
    for ($i=0; $i < count($this->input->post('kode_pesan[]')) ; $i++) { 
        $id_cust = $this->getkodepelanggan();
        $datacustomer = array(
            'customerid' => $id_cust,
            'name' => $this->input->post('nama['.$i.']'),
            'address' => $this->input->post('alamat['.$i.']'),
            'phone' => $this->input->post('nohp['.$i.']'),
            'gender' => $this->input->post('jeniskelamin['.$i.']')
        );
        $this->db->insert('customer',$datacustomer);
    
    $daftar_di = $this->getBaseUrl();
    $username = $this->session->userdata('username');
    $reservationid = $this->get_idreservation();
    $datareservation = array(
            'reservationid' => $reservationid,
            'reservation_code' => $this->input->post('reservation_code'),
            'reservation_at' => 'Neon',
            'reservation_date' => $this->input->post('reservation_date'),
            'customerid' => $id_cust,
            'seat_code' => $this->input->post('seat_code['.$i.']'),
            'ruteid' => $this->input->post('ruid'),
            // $this->input->post('rute_id_booking')
            'userid' => $username,
            'price' => $this->input->post('price')
              
        );
    $this->db->insert('reservation',$datareservation);
}
    
}

 function getkodepelanggan(){
        $query = $this->db->query(
            "SELECT IFNULL(MAX(SUBSTRING(customerid,7)),0) + 1 As no_urut FROM customer");

        $data = $query->row_array();
        $no_urut = $data['no_urut'];
        $id_pelanggan = 'CUS'.sprintf("%04d",$no_urut);

        return $id_pelanggan;
    }

    function get_idreservation(){
            $tgl = date('Ymd');
            $query = $this->db->query(
            "SELECT IFNULL(MAX(SUBSTRING(reservationid,9,3)),0) + 1 As no_urut FROM reservation
            WHERE SUBSTRING(reservationid,1,8) = '".$tgl."'");

        $data = $query->row_array();
        $no_urut = $data['no_urut'];
        $no_pendaftaran = $tgl.sprintf("%03d",$no_urut);

        return $no_pendaftaran;

        }

        function get_seat(){

        $this->db->select('seat_code');
        $this->db->from($this->table3);
        $this->db->order_by('reservationid','asc');
        $query = $this->db->get();
        $result = $query->result();

        return $result;
        }

}
 ?>