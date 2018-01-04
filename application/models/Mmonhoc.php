<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmonhoc extends CI_Model{

	public function __construct() {
	parent::__construct();
	}

	public function them($data = array())
	{
		return $this->db->insert('mon_hoc', $data);
	}
	public function capnhat($id, $data=array())
	{
		$this->db->where('MaMH', $id);
		return $this->db->update('mon_hoc', $data);
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
		$this->db->from('mon_hoc,lop_hoc,giaovien');
		$this->db->where('mon_hoc.MaLH = lop_hoc.MaLH');
		$this->db->where('mon_hoc.magv = giaovien.magv');
		return $this->db->get()->result_array();
	}
	public function get($id)
	{
		$this->db->from('mon_hoc');
		$this->db->where('MaMH',$id);
		return $this->db->get()->row_array();
	}
	public function xoa_monhoc($id)
	{
		$this->db->where('MaMH', $id);
		return $this->db->delete('mon_hoc');
	}
}