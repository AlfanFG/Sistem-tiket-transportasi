<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class M_Login extends CI_Model {

		public function cek_user($data) {
			$query = $this->db->get_where('user', $data);
			return $query;
		}

	}

?>