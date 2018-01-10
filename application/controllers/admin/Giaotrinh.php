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
			'active_gt' => $active
		);
		$kq = $this->mgiaotrinh->capnhat($id,$dat);
		echo($kq);
	}
	
	public function xoa_giaotrinh()
	{
		$id = $this->input->post('id');
		$kq = $this->mgiaotrinh->xoa_giaotrinh($id);
		echo $kq;
	}
	public function chinhsua($id)
	{
		$data['title'] = 'Chỉnh sửa giáo trình';
		
		if(isset($_POST['luu']))
		{
			$MaMH = $this->input->post('MaMH');
			$TenGiaotrinh = $this->input->post('TenGiaotrinh');
			$video = $this->input->post('video');
			$noidungchinh = $this->input->post('noidungchinh');
			$noidungfull = $this->input->post('noidungfull');
			$gioithieu = $this->input->post('gioithieu');
			if($this->input->post('active_gt'))
				$active_gt = $this->input->post('active_gt');
			else
				$active_gt = 0;
			$dat = array(
				'MaMH' => $MaMH,
				'TenGiaotrinh' => $TenGiaotrinh,
				'video' => $video,
				'noidungchinh' => $noidungchinh,
				'noidungfull' => $noidungfull,
				'gioithieu' => $gioithieu,
				'active_gt' => $active_gt,
			);
			$kq = $this->mgiaotrinh->capnhat($id,$dat);
			if($kq == 1)
				$data['thongbao'] = '<script>alert("Cập nhật thành công!")</script>';
			else
				$data['thongbao'] = '<script>alert("Lỗi!")</script>';
		}
		$data['giaotrinh'] = $this->mgiaotrinh->get($id);
		$data['monhoc'] = $this->mmonhoc->danhsach();
		$data['giaovien'] = $this->mgiaovien->danhsach();
		$data['content'] = 'admin/giaotrinh/chinhsua';
		$this->load->view('admin/index', $data);
	}
	public function them()
	{
		$data['title'] = 'Thêm giáo trình mới';
		
		if(isset($_POST['them']))
		{
			$MaMH = $this->input->post('MaMH');
			$TenGiaotrinh = $this->input->post('TenGiaotrinh');
			$video = $this->input->post('video');
			$noidungchinh = $this->input->post('noidungchinh');
			$noidungfull = $this->input->post('noidungfull');
			$gioithieu = $this->input->post('gioithieu');
			if($this->input->post('active_gt'))
				$active_gt = $this->input->post('active_gt');
			else
				$active_gt = 0;
			$dat = array(
				'MaMH' => $MaMH,
				'TenGiaotrinh' => $TenGiaotrinh,
				'video' => $video,
				'noidungchinh' => $noidungchinh,
				'noidungfull' => $noidungfull,
				'gioithieu' => $gioithieu,
				'active_gt' => $active_gt,
			);
			$kq = $this->mgiaotrinh->them($dat);
			if($kq == 1)
				$data['thongbao'] = '<script>alert("Thêm giáo trình mới thành công!")</script>';
			else
				$data['thongbao'] = '<script>alert("Lỗi!")</script>';
		}
		$data['monhoc'] = $this->mmonhoc->danhsach();
		$data['giaovien'] = $this->mgiaovien->danhsach();
		$data['content'] = 'admin/giaotrinh/them';
		$this->load->view('admin/index', $data);
	}
}
?>
