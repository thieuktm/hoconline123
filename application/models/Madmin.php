
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
		$this->db->where('active', 1);
		$kq = $this->db->count_all_results();
		if($kq == 1)
			return TRUE;
		else
			return FALSE;
	}
	public function danhsach()
	{
		$this->db->from('admin');
		return $this->db->get()->result_array();
	}
	public function thongtin($acount)
	{
		$this->db->from('admin');
		$this->db->where('acount', $acount);
		return $this->db->get()->row_array();
	}
	public function capnhat($data=array(),$id)
	{
		$this->db->where('id_admin', $id);
		return $this->db->update('admin', $data);
	}
	public function check_acount($acount)
	{
		$this->db->select('*');
		$this->db->from('admin');
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
		$this->db->from('admin');
		$this->db->where('id_admin', $id);
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
	public function them_ad($db = array())
	{
		return $this->db->insert('admin',$db);
	}
	public function xoa_ad($id)
	{
		$this->db->where('id_admin', $id);
		return $this->db->delete('admin');
	}
	public function chinhsua($id)
	{
		$this->db->from('admin');
		$this->db->where('id_admin', $id);
		return $this->db->get()->row_array();
	}
	public function countAll(){
		return $this->db->count_all($this->_table); 
	}
}