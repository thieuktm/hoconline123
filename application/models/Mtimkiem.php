<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mtimkiem extends CI_Model{

	public function __construct() {
	parent::__construct();
	}

	public function timkiem($tukhoa)
	{
		$this->db->from('mon_hoc, lop_hoc');
		$this->db->where('mon_hoc.MaLH = lop_hoc.MaLH');
		$this->db->like('TenMH', $tukhoa, 'after'); 
		$this->db->limit(10);
		return $this->db->get()->result_array();
	}
}