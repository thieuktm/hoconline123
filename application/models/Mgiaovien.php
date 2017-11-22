<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mgiaovien extends CI_Model{

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
	
	
	public function giaovien1()
	{
		$this->db->from('lop_hoc,giaovien');
		$this->db->where('lop_hoc.magv=giaovien.magv');
		$this->db->where('lop_hoc.cap=',1);
		$this->db->order_by('lop_hoc.magv', 'desc');
		return $this->db->get()->result_array();
	}
	public function giaovien2()
	{   $this->db->from('lop_hoc,giaovien');
		$this->db->where('lop_hoc.magv=giaovien.magv');
		$this->db->where('lop_hoc.cap=',2);
		$this->db->order_by('lop_hoc.magv', 'desc');
		return $this->db->get()->result_array();
	}
	public function giaovien3()
	{   $this->db->from('lop_hoc,giaovien');
		$this->db->where('lop_hoc.magv=giaovien.magv');
		$this->db->where('lop_hoc.cap=',3);
		$this->db->order_by('lop_hoc.magv', 'desc');
		return $this->db->get()->result_array();
	}
	public function giaovien4()
	{   $this->db->from('lop_hoc,giaovien');
		$this->db->where('lop_hoc.magv=giaovien.magv');
		$this->db->where('lop_hoc.cap=',4);
		$this->db->order_by('lop_hoc.magv', 'desc');
		return $this->db->get()->result_array();
	}
	public function countAll(){
			return $this->db->count_all($this->_table); 
	}
}