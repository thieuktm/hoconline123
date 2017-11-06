<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mhocvien extends CI_Model{

	public function __construct() {
	parent::__construct();
	}

	public function check_mail($email)
	{
		$this->db->from('hoc_vien');
		$this->db->where('email', $email);
		$kq = $this->db->count_all_results();
		if($kq != 0)
			return FALSE;
		else
			return TRUE;
	}
	public function check_mail_pass($email,$pass)
	{
		$this->db->from('hoc_vien');
		$this->db->where('email', $email);
		$this->db->where('pass', $pass);
		$kq = $this->db->count_all_results();
		if($kq == 1)
			return TRUE;
		else
			return FALSE;
	}
	public function dangky($email, $pass)
	{
		$data = array(
			'email' => $email,
			'pass' => md5($pass),
		);
		$this->db->insert('hoc_vien', $data);
	}
	public function cap2()
	{
		$this->db->from('lop_hoc');
		$this->db->where('cap = 2');
		//$this->db->order_by('MaLH', 'desc');
		//$this->db->limit();
		return $this->db->get()->result_array();
	}
	public function cap3()
	{
		$this->db->from('lop_hoc');
		$this->db->where('cap = 3');
		//$this->db->order_by('MaLH', 'desc');
		//$this->db->limit();
		return $this->db->get()->result_array();
	}
	public function cap4()
	{
		$this->db->from('lop_hoc');
		$this->db->where('cap = 4');
		//$this->db->order_by('MaLH', 'desc');
		//$this->db->limit();
		return $this->db->get()->result_array();
	}
	public function countAll(){
		return $this->db->count_all($this->_table); 
	}
}