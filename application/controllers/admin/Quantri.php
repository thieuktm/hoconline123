<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quantri extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!isset($_SESSION['admin']))
		{
			redirect(base_url('admin/login'));
		}
		$this->lang->load('home','vietnamese');  
		$this->load->helper('url');
		$this->load->model('mhocvien');
		$this->load->model('madmin');
		
	}
	public function index()
	{
		$data['title'] = 'Danh sách quản trị viên';
		$data['content'] = 'admin/admin/danhsach';
		$data['admin'] = $this->madmin->danhsach();
		$this->load->view('admin/index', $data);
	}
	public function active()
	{
		$id = $this->input->post('id');
		$active = $this->input->post('active');
		$dat = array(
			'active' => $active
		);
		$kq = $this->madmin->capnhat($dat,$id);
		if(isset($kq))
			die(json_encode(1));
		else
			die(json_encode(0));
	}
	public function them_ad()
	{
		$ten = $this->input->post('ten');
		$acount = $this->input->post('acount');
		$pass = $this->input->post('pass');
		$repass = $this->input->post('repass');
		if($this->madmin->check_acount($acount) == TRUE)
		{
			if($pass == $repass)
			{
				$dat = array(
					'ten' => $ten,
					'acount' => $acount,
					'pass' => md5($pass),
				);
				$kq = $this->madmin->them_ad($dat);
				if(isset($kq))
					die(json_encode(1));
				else
					die(json_encode(0));
			}
			else
				die(json_encode(2));
		}
		else
			die(json_encode(3));
	}
	public function luu_pass()
	{
		$id = $this->input->post('id');
		$mk = $this->input->post('mk');
		$pass = $this->input->post('pass');
		$repass = $this->input->post('repass');
		if($this->madmin->check_pass($mk,$id) == TRUE)
		{
			if($pass == $repass)
			{
				$dat = array(
					'pass' => md5($pass),
				);
				$kq = $this->madmin->capnhat($dat,$id);
				if(isset($kq))
					die(json_encode(1));
				else
					die(json_encode(0));
			}
			else
				die(json_encode(2));
		}
		else
			die(json_encode(3));
	}
	
	public function xoa_ad()
	{
		$id = $this->input->post('id');
		$kq = $this->madmin->xoa_ad($id);
		if(isset($kq))
			die(json_encode(1));
		else
			die(json_encode(0));
	}
	public function chinhsua($id)
	{
		$data['title'] = 'Chỉnh sửa quản trị viên';
		if(isset($_POST['luu']))
		{
			$ten = $this->input->post('ten');
			$dat = array(
				'ten' => $ten,
			);
			$kq = $this->madmin->capnhat($dat,$id);
			if(isset($kq))
				echo '<script>alert("Cập nhật thành công!")</script>';
			else
				echo '<script>alert("Lỗi!")</script>';
		}
		$data['admin'] = $this->madmin->chinhsua($id);
		$data['content'] = 'admin/admin/chinhsua';
		$this->load->view('admin/index', $data);
	}
}
?>
