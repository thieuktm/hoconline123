<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Memail extends CI_Model{

	public function __construct() {
	parent::__construct();
	}
	public function danhsach()
	{
		$this->db->from('email');
		return $this->db->get()->result_array();
	}
	public function thongtin($acount)
	{
		$this->db->from('email');
		$this->db->where('acount', $acount);
		return $this->db->get()->row_array();
	}
	public function capnhat($data=array(),$id)
	{
		$this->db->where('id_email', $id);
		return $this->db->update('email', $data);
	}
	public function check_acount($acount)
	{
		$this->db->select('*');
		$this->db->from('email');
		$this->db->where('acount', $acount);
		$kq = $this->db->get()->result_array();
		if(count($kq) != 0)
		{
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
	public function check_pass($pass,$id)
	{
		$this->db->select('*');
		$this->db->from('email');
		$this->db->where('id_email', $id);
		$this->db->where('pass', md5($pass));
		$kq = $this->db->get()->result_array();
		if(count($kq) != 0)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	public function them($db = array())
	{
		return $this->db->insert('email',$db);
	}
	public function xoa($id)
	{
		$this->db->where('id_email', $id);
		return $this->db->delete('email');
	}
	public function chinhsua($id)
	{
		$this->db->from('email');
		$this->db->where('id_email', $id);
		return $this->db->get()->row_array();
	}
	public function countAll(){
		return $this->db->count_all($this->_table); 
	}
}