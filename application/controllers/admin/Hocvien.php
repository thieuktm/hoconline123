<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hocvien extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if(!isset($_SESSION['admin']))
		{
			redirect(base_url('admin/login'));
		}
		$this->lang->load('home','vietnamese');  
		$this->load->helper('url');
		$this->load->model('mhocvien');
		$this->load->model('madmin');
		$this->load->model('mtime');
		
	}
	public function index()
	{
		$data['title'] = 'Danh sách học viên';
		$data['content'] = 'admin/hocvien/danhsach';
		$data['hocvien'] = $this->mhocvien->danhsach();
		$this->load->view('admin/index', $data);
	}
	public function active()
	{
		$id = $this->input->post('id');
		$active = $this->input->post('active');
		$dat = array(
			'active' => $active
		);
		$kq = $this->mhocvien->capnhat($id,$dat);
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
			$kq = $this->mhocvien->capnhat($id,$dat);
			if($kq == 1)
				die(json_encode(1));
			else
				die(json_encode(0));
		}
		else
			die(json_encode(2));
	}
	
	public function xoa_hocvien()
	{
		$id = $this->input->post('id');
		$kq = $this->mhocvien->xoa_hocvien($id);
		echo $kq;
	}
	public function chinhsua($id)
	{
		$data['title'] = 'Chỉnh sửa thông tin học viên';
		
		if(isset($_POST['luu']))
		{
			//upload avatar
			$config['upload_path'] = 'images/hocvien/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library("upload", $config);
            if($this->upload->do_upload("avatar_hv"))
			{
				$img = $this->upload->data();
				$avatar_hv = $config['upload_path'].$img['file_name'];
			}
			else
				$avatar_hv = $this->input->post('images');;
			//end upload avatar
			$ho_ten = $this->input->post('ho_ten');
			$email = $this->input->post('email');
			$phone = $this->input->post('phone');
			$dia_chi = $this->input->post('dia_chi');
			$ngay_sinh = $this->input->post('ngay_sinh');
			$gioi_tinh = $this->input->post('gioi_tinh');
			$ngay_dk = $this->input->post('ngay_dk');
			if($this->input->post('active'))
				$active = $this->input->post('active');
			else
				$active = 0;
			$dat = array(
				'ho_ten' => $ho_ten,
				'email' => $email,
				'phone' => $phone,
				'dia_chi' => $dia_chi,				'ngay_sinh' => $ngay_sinh,
				'gioi_tinh' => $gioi_tinh,
				'ngay_dk' => $ngay_dk,
				'avatar_hv' => $avatar_hv,
				'active' => $active,
			);
			$kq = $this->mhocvien->capnhat($id,$dat);
			if($kq == 1)
				$data['thongbao'] = '<script>alert("Cập nhật thành công!")</script>';
			else
				$data['thongbao'] = '<script>alert("Lỗi!")</script>';
		}
		$data['hocvien'] = $this->mhocvien->get($id);
		$data['content'] = 'admin/hocvien/chinhsua';
		$this->load->view('admin/index', $data);
	}
}
?>
