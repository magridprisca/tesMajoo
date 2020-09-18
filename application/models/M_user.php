<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        date_default_timezone_set("Asia/Jakarta");
    }
    private $_table = "user";

	function login_authen($username,$password){
		$this->db->select('*');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$this->db->from('user');
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return true;
		}else{
			return false;
		}
	}

	public function authen_user($username){
		$this->db->select('*');
		$this->db->where('username', $username);
		$this->db->from('user');
		$query = $this->db->get();
		return $query->result_array();
  }
}