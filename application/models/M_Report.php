<?php 
	/**
	* 
	*/
	class M_Report extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function index(){
		$query = $this->db->get("user");

		return $query->result_array();

		}

		public function customer(){
		$query = $this->db->get("customer");

		return $query->result_array();
		}

		public function stasiun(){
		$query = $this->db->get("stasiun");

		return $query->result_array();
		}

		public function transportation(){
		$query = $this->db->get("transportation");

		return $query->result_array();
		}

		public function rute(){
		$query = $this->db->get("rute");

		return $query->result_array();
		}

		public function transportation_type(){
		$query = $this->db->get("transportation_type");

		return $query->result_array();
		}

		public function jadwal(){
		$query = $this->db->query("
			SELECT R.depart_at,R.rute_from,T.description,R.rute_to,ADDTIME(R.depart_at,R.time) as time, RE.price,T.seat_qty,(T.seat_qty - count(RE.seat_code)) as Seat_Reserved
            from v_rutestasiun R inner join stasiun S on R.rute_from = S.stasiunid inner join transportation T on R.transportationid = T.transportationid inner join reservation RE on R.ruteid = RE.ruteid where 
             R.rute_from = S.stasiunid GROUP BY R.rute_from,R.rute_to,T.description");

		return $query;
		}

		

		public function jadwal_PE(){
		$query = $this->db->query("
			SELECT R.depart_at,R.rute_from,T.description,R.rute_to,ADDTIME(R.depart_at,R.time) as time, RE.price,T.seat_qty,(T.seat_qty - count(RE.seat_code)) as Seat_Reserved
            from v_rutepesawat R inner join bandara B on R.rute_from = B.bandaraid inner join transportation T on R.transportationid = T.transportationid inner join reservation RE on R.ruteid = RE.ruteid where 
             R.rute_from = B.bandaraid GROUP BY R.rute_from,R.rute_to,T.description");

		return $query;
		}

		public function pendapatan($tgldari,$tglke){
		$query = $this->db->query(
			"SELECT reservation_date,COUNT(reservationid) as jumlah_transaksi,SUM(price) as price from reservation where reservation_date BETWEEN '$tgldari' and '$tglke' GROUP BY reservation_date");

		return $query->result_array();
		}

		public function pendapatanrep($awal,$akhir){
		$query = $this->db->query(
			"SELECT reservation_date,COUNT(reservationid) as jumlah_transaksi,SUM(price) as price from reservation where reservation_date BETWEEN '$awal' and '$akhir' GROUP BY reservation_date");
			
		return $query->result_array();
		}

		public function getdata(){
		$query = $this->db->query(
			"SELECT R.reservation_date,COUNT(R.reservationid) as jumlah_transaksi,SUM(R.price) as price from reservation R GROUP BY R.reservation_date");

		return $query->result_array();
		}

		function getPfrom($rute_fromp){
    $query = $this->db->query("SELECT * FROM bandara where bandaraid = '".$rute_fromp."'");


        return $query;
    }

    function getstasiun($rute_from){
    $query = $this->db->query("SELECT * FROM stasiun where stasiunid = '".$rute_from."'");


        return $query;
    }

     function getstasiunto($rute_to){
    $query = $this->db->query("SELECT * FROM stasiun where stasiunid = '".$rute_to."'");


        return $query;
    }

    function getPto($rute_top){
    $query = $this->db->query("SELECT * FROM bandara where bandaraid = '".$rute_top."'");


        return $query;
    }
	}
 ?>