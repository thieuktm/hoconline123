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
	public function cap1()
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