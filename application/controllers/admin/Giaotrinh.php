<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Giaotrinh extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if(!isset($_SESSION['admin']))
		{
			redirect(base_url('admin/login'));
		}
		$this->lang->load('home','vietnamese');  
		$this->load->helper('url');
		$this->load->model('mmonhoc');
		$this->load->model('mgiaovien');
		$this->load->model('mlophoc');
		$this->load->model('mgiaotrinh');
		$this->load->model('madmin');
		$this->load->model('mtime');
		
	}
	public function index()
	{
		$data['title'] = 'Danh sách giáo trình';
		$data['content'] = 'admin/giaotrinh/danhsach';
		$data['giaotrinh'] = $this->mgiaotrinh->danhsach();
		$this->load->view('admin/index', $data);
	}
	public function active()
	{
		$id = $this->input->post('id');
		$active = $this->input->post('active');
		$dat = array(
			'active_mh' => $active
		);
		$kq = $this->mmonhoc->capnhat($id,$dat);
		echo($kq);
	}
	
	public function luu_pass()
	{
		$id = $this->input->post('id');
		$pass = $this->input->post('pass');
		$repass = $this->input->post('repass');
		if($pass == $repass)
		{
			$dat = array(
				'pass' => md5($pass),
			);
			$kq = $this->mmonhoc->capnhat($id,$dat);
			if($kq == 1)
				die(json_encode(1));
			else
				die(json_encode(0));
		}
		else
			die(json_encode(2));
	}
	
	public function xoa_monhoc()
	{
		$id = $this->input->post('id');
		$kq = $this->mmonhoc->xoa_monhoc($id);
		echo $kq;
	}
	public function chinhsua($id)
	{
		$data['title'] = 'Chỉnh sửa thông tin môn học';
		
		if(isset($_POST['luu']))
		{
			$TenMH = $this->input->post('TenMH');
			$sotinchi = $this->input->post('sotinchi');
			$MaLH = $this->input->post('MaLH');
			$magv = $this->input->post('magv');
			if($this->input->post('active_mh'))
				$active_mh = $this->input->post('active_mh');
			else
				$active_mh = 0;
			$dat = array(
				'TenMH' => $TenMH,
				'sotinchi' => $sotinchi,
				'MaLH' => $MaLH,
				'magv' => $magv,
				'active_mh' => $active_mh,
			);
			$kq = $this->mmonhoc->capnhat($id,$dat);
			if($kq == 1)
				$data['thongbao'] = '<script>alert("Cập nhật thành công!")</script>';
			else
				$data['thongbao'] = '<script>alert("Lỗi!")</script>';
		}
		$data['monhoc'] = $this->mmonhoc->get($id);
		$data['lophoc'] = $this->mlophoc->danhsach();
		$data['giaovien'] = $this->mgiaovien->danhsach();
		$data['content'] = 'admin/monhoc/chinhsua';
		$this->load->view('admin/index', $data);
	}
	public function them()
	{
		$data['title'] = 'Thêm môn học mới';
		
		if(isset($_POST['them']))
		{
			$TenMH = $this->input->post('TenMH');
			$sotinchi = $this->input->post('sotinchi');
			$MaLH = $this->input->post('MaLH');
			$magv = $this->input->post('magv');
			if($this->input->post('active_mh'))
				$active_mh = $this->input->post('active_mh');
			else
				$active_mh = 0;
			$dat = array(
				'TenMH' => $TenMH,
				'sotinchi' => $sotinchi,
				'MaLH' => $MaLH,
				'magv' => $magv,
				'active_mh' => $active_mh,
			);
			$kq = $this->mmonhoc->them($dat);
			if($kq == 1)
				$data['thongbao'] = '<script>alert("Thêm môn học mới thành công!")</script>';
			else
				$data['thongbao'] = '<script>alert("Lỗi!")</script>';
		}
		$data['lophoc'] = $this->mlophoc->danhsach();
		$data['giaovien'] = $this->mgiaovien->danhsach();
		$data['content'] = 'admin/monhoc/them';
		$this->load->view('admin/index', $data);
	}
}
?>
