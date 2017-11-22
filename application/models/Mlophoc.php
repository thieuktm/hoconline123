<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlophoc extends CI_Model{

	public function __construct() {
	parent::__construct();
	}

	public function lophoc($limit)
	{
		$this->db->from('lop_hoc');
		$this->db->order_by('MaLH', 'desc');
		$this->db->limit($limit);
		return $this->db->get()->result_array();
	}
	public function chitiet($id)
	{	$this->db->select('*');
		$this->db->from('lop_hoc,giao_trinh');
		$this->db->where('lop_hoc.Ma_Giaotrinh = giao_trinh.Ma_Giaotrinh');
	    $this->db->where('lop_hoc.MaLH=',$id);
		$this->db->order_by('lop_hoc.MaLH', 'desc');
		return $this->db->get()->result_array();
	}
	public function chi_tiet()
	{	$this->db->select('*');
		$this->db->from('lop_hoc,giao_trinh');
		$this->db->where('lop_hoc.Ma_Giaotrinh = giao_trinh.Ma_Giaotrinh');
	    
		$this->db->order_by('lop_hoc.MaLH', 'desc');
		return $this->db->get()->result_array();
	}
	public function cap1()
	{
		$this->db->from('lop_hoc');
		$this->db->where('cap = 1');
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
	public function countAll(){
		return $this->db->count_all($this->_table); 
	}
}