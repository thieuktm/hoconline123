<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lophoc extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if(!isset($_SESSION['admin']))
		{
			redirect(base_url('admin/login'));
		}
		$this->lang->load('home','vietnamese');  
		$this->load->helper('url');
		$this->load->model('mlophoc');
		$this->load->model('madmin');
		$this->load->model('mtime');
	}
	public function index()
	{
		$data['title'] = 'Danh sách lớp học';
		$data['content'] = 'admin/lophoc/danhsach';
		$data['lophoc'] = $this->mlophoc->danhsach();
		$this->load->view('admin/index', $data);
	}
	public function them()
	{
		$data['title'] = 'Thêm lớp học mới';
		$data['content'] = 'admin/lophoc/them';
		$data['giaovien'] = $this->mlophoc->danhsach_giaovien();
		if(isset($_POST['them']))
		{
			$ten_lh = $this->input->post('TenLH');
			$magv = $this->input->post('magv');
			
<<<<<<< HEAD
			$ngay_BD = $this->mtime->chuan_time($this->input->post('ngay_BD'));
			$ngay_KT = $this->mtime->chuan_time($this->input->post('ngay_KT'));
=======
			$ngay_BD = $this->chuan_time($this->input->post('ngay_BD'));
			$ngay_KT = $this->chuan_time($this->input->post('ngay_KT'));
>>>>>>> 8d008b730926480d5d5f303fbe8d257a3a52718b
			$Soluong_HV = $this->input->post('Soluong_HV');
			$hoc_phi = $this->input->post('hoc_phi');
			$cap = $this->input->post('cap');
			if(isset($_POST['active']))
				$active = $this->input->post('active');
			else 
				$active = 0;
			if(isset($_POST['hot']))
				$hot = $this->input->post('hot');
			else 
				$hot = 0;
			//upload hình
            $config['upload_path'] = 'images/poster/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library("upload", $config);
            if($this->upload->do_upload("poster"))
			{
				$img = $this->upload->data();
				$poster = $config['upload_path'].$img['file_name'];
				$dat = array(
					'TenLH' => $ten_lh,
					'magv' => $magv,
					'ngay_BD' => $ngay_BD,
					'ngay_KT' => $ngay_KT,
					'Soluong_HV' => $Soluong_HV,
					'hoc_phi' => $hoc_phi,
					'active' => $active,
					'hot' => $hot,
					'poster' => $poster,
					'cap' => $cap,
				);
				$kq = $this->mlophoc->them($dat);
				if(isset($kq))
					$data['thongbao'] = '<script>alert("Thêm mới thành công.")</script>';
				else
					$data['thongbao'] = '<script>alert("Thêm mới thất bại.")</script>';
            }
			else
			{
                $data['thongbao'] = '<script>alert("Upload hình không thành công!")</script>';
            }
		}
		$this->load->view('admin/index', $data);
	}
	public function active()
	{
		$id = $this->input->post('id');
		$active = $this->input->post('active');
		$dat = array(
			'active' => $active
		);
		$kq = $this->mlophoc->capnhat($dat,$id);
		if(isset($kq))
			die(json_encode(1));
		else
			die(json_encode(0));
	}
	public function lop_hot()
	{
		$id = $this->input->post('id');
		$hot = $this->input->post('hot');
		$dat = array(
			'hot' => $hot
		);
		$kq = $this->mlophoc->capnhat($dat,$id);
		if(isset($kq))
			die(json_encode(1));
		else
			die(json_encode(0));
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
	
	public function xoa()
	{
		$id = $this->input->post('id');
		$kq = $this->mlophoc->xoa_lophoc($id);
		if(isset($kq))
			die(json_encode(1));
		else
			die(json_encode(0));
	}
	public function chinhsua($id)
	{
		$data['title'] = 'Chỉnh sửa lớp học';
		$data['content'] = 'admin/lophoc/chinhsua';
		$data['giaovien'] = $this->mlophoc->danhsach_giaovien();
		if(isset($_POST['luu']))
		{
			$ten_lh = $this->input->post('TenLH');
			$magv = $this->input->post('magv');
			$ngay_BD = $this->mtime->chuan_time($this->input->post('ngay_BD'));
			$ngay_KT = $this->mtime->chuan_time($this->input->post('ngay_KT'));
			$Soluong_HV = $this->input->post('Soluong_HV');
			$hoc_phi = $this->input->post('hoc_phi');
			$cap = $this->input->post('cap');
			if(isset($_POST['active']))
				$active = $this->input->post('active');
			else 
				$active = 0;
			if(isset($_POST['hot']))
				$hot = $this->input->post('hot');
			else 
				$hot = 0;
			//upload hình
            $config['upload_path'] = 'images/poster/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library("upload", $config);
            if($this->upload->do_upload("poster"))
			{
				$img = $this->upload->data();
				$poster = $config['upload_path'].$img['file_name'];
            }
			else
			{
                $poster = $this->input->post('images');
            }
			
			$dat = array(
				'TenLH' => $ten_lh,
				'magv' => $magv,
				'ngay_BD' => $ngay_BD,
				'ngay_KT' => $ngay_KT,
				'Soluong_HV' => $Soluong_HV,
				'hoc_phi' => $hoc_phi,
				'active' => $active,
				'hot' => $hot,
				'poster' => $poster,
				'cap' => $cap,
			);
			$kq = $this->mlophoc->capnhat($dat, $id);
			if(isset($kq))
				$data['thongbao'] = '<script>alert("Cập nhât thành công.")</script>';
			else
				$data['thongbao'] = '<script>alert("Cập nhật thất bại.")</script>';
		}
		$data['lophoc'] = $this->mlophoc->chinhsua($id);
		$this->load->view('admin/index', $data);
	}
}
?>
