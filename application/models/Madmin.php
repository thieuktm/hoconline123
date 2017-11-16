<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Madmin extends CI_Model{

	public function __construct() {
	parent::__construct();
	}

	public function check($acount,$pass)
	{
		$this->db->from('admin');
		$this->db->where('acount', $acount);
		$this->db->where('pass', $pass);
		$kq = $this->db->count_all_results();
		if($kq == 1)
			return TRUE;
		else
			return FALSE;
	}
	//phần dưới này chưa dùng đến
	public function dangky($data = array())
	{
		$this->db->insert('hoc_vien', $data);
	}
	public function thongtin($email)
	{
		$this->db->from('hoc_vien');
		$this->db->where('email', $email);
		return $this->db->get()->row_array();
	}
	public function capnhat($MaHV, $data=array())
	{
		$this->db->where('MaHV', $MaHV);
		$this->db->update('hoc_vien', $data);
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