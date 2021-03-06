<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlophoc extends CI_Model{

	public function __construct() {
	parent::__construct();
	}

	public function lophoc($limit)
	{
		$this->db->from('lop_hoc,giaovien');
		$this->db->where('lop_hoc.magv = giaovien.magv');
		$this->db->order_by('MaLH', 'desc');
		$this->db->limit($limit);
		return $this->db->get()->result_array();
	}
	public function chitiet($id,$gt)
	{	$this->db->select('*');
		$this->db->from('giao_trinh,mon_hoc, lop_hoc,giaovien');
	    $this->db->where('mon_hoc.MaMH=',$id);
	    $this->db->where('mon_hoc.MaMH = giao_trinh.MaMH');
	 	$this->db->where('mon_hoc.MaLH = lop_hoc.MaLH');
	 	$this->db->where('mon_hoc.magv = giaovien.magv');
	 	if($gt != 0)
		{
			$this->db->where('giao_trinh.Ma_Giaotrinh', $gt);
		}
	 	$this->db->order_by('giao_trinh.Ma_Giaotrinh', 'asc');
		return $this->db->get()->row_array();
	}
	public function bai_tt($id,$MaGT)
	{	$this->db->select('*');

		$this->db->from('giao_trinh,mon_hoc,lop_hoc');
	 	$this->db->where('mon_hoc.MaLH = lop_hoc.MaLH');
	 	$this->db->where('mon_hoc.MaMH = giao_trinh.MaMH');
	    $this->db->where('mon_hoc.MaMH=',$id);
	    $this->db->where('Ma_Giaotrinh > ', $MaGT);
		$this->db->order_by('giao_trinh.Ma_Giaotrinh', 'asc');
	 		
		return $this->db->get()->result_array();
	}
	public function cap($id)
	{
		$this->db->from('lop_hoc, giaovien');
		$this->db->where('lop_hoc.cap', $id);
		$this->db->where('lop_hoc.magv = giaovien.magv');
		//$this->db->order_by('MaLH', 'desc');
		//$this->db->limit();
		return $this->db->get()->result_array();
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
	public function giaovien1()
	{
		$this->db->from('lop_hoc');
		$this->db->where('cap = 1');
		//$this->db->order_by('MaLH', 'desc');
		//$this->db->limit();
		return $this->db->get()->result_array();
	}
	public function giaovien2()
	{
		$this->db->from('lop_hoc');
		$this->db->where('cap = 1');
		//$this->db->order_by('MaLH', 'desc');
		//$this->db->limit();
		return $this->db->get()->result_array();
	}
	public function giaovien3()
	{
		$this->db->from('lop_hoc');
		$this->db->where('cap = 1');
		//$this->db->order_by('MaLH', 'desc');
		//$this->db->limit();
		return $this->db->get()->result_array();
	}
	public function giaovien4()
	{
		$this->db->from('lop_hoc');
		$this->db->where('cap = 1');
		//$this->db->order_by('MaLH', 'desc');
		//$this->db->limit();
		return $this->db->get()->result_array();
	}
	public function danhsach()
	{
		$this->db->from('lop_hoc, giaovien');
		$this->db->where('lop_hoc.magv = giaovien.magv');
		//$this->db->order_by('MaLH', 'desc');
		//$this->db->limit();
		return $this->db->get()->result_array();
	}
	public function danhsach_giaovien()
	{
		$this->db->from('giaovien');
		$this->db->order_by('TenGV', 'asc');
		return $this->db->get()->result_array();
	}
	public function them($data = array())
	{
		return $this->db->insert('lop_hoc',$data);
	}
	public function chinhsua($id)
	{
		$this->db->from('lop_hoc, giaovien');
		$this->db->where('lop_hoc.magv = giaovien.magv');
		$this->db->where('lop_hoc.MaLH', $id);
		return $this->db->get()->row_array();
	}
	public function capnhat($data=array(),$id)
	{
		$this->db->where('MaLH', $id);
		return $this->db->update('lop_hoc', $data);
	}
	public function xoa_lophoc($id)
	{
		$this->db->where('MaLH', $id);
		return $this->db->delete('lop_hoc');
	}
	public function countAll(){
		return $this->db->count_all($this->_table); 
	}
}