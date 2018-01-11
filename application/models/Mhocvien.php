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
		return $this->db->update('hoc_vien', $data);
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
	public function danhsach()
	{
		$this->db->from('hoc_vien');
		return $this->db->get()->result_array();
	}
	public function get($id)
	{
		$this->db->from('hoc_vien');
		$this->db->where('MaHV',$id);
		return $this->db->get()->row_array();
	}
	public function xoa_hocvien($id)
	{
		$this->db->where('MaHV', $id);
		return $this->db->delete('hoc_vien');
	}
}