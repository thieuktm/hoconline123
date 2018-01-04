<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mgiaotrinh extends CI_Model{

	public function __construct() {
	parent::__construct();
	}

	public function them($data = array())
	{
		return $this->db->insert('giao_trinh', $data);
	}
	public function capnhat($id, $data=array())
	{
		$this->db->where('MaMH', $id);
		return $this->db->update('giao_trinh', $data);
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
		$this->db->from('giao_trinh, mon_hoc, lop_hoc');
		$this->db->where('giao_trinh.MaMH = mon_hoc.MaMH');
		$this->db->where('lop_hoc.MaLH = mon_hoc.MaLH');
		return $this->db->get()->result_array();
	}
	public function get($id)
	{
		$this->db->from('giao_trinh');
		$this->db->where('MaMH',$id);
		return $this->db->get()->row_array();
	}
	public function xoa_monhoc($id)
	{
		$this->db->where('MaMH', $id);
		return $this->db->delete('giao_trinh');
	}
}