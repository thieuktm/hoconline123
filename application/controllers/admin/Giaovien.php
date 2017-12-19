<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Giaovien extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if(!isset($_SESSION['admin']))
		{
			redirect(base_url('admin/login'));
		}
		$this->lang->load('home','vietnamese');  
		$this->load->helper('url');
		$this->load->model('mlophoc');
		$this->load->model('mgiaovien');
		$this->load->model('mtime');
		$this->load->model('madmin');
	}
	public function index()
	{
		$data['title'] = 'Danh sách giáo viên';
		$data['content'] = 'admin/giaovien/danhsach';
		$data['giaovien'] = $this->mgiaovien->danhsach();
		$this->load->view('admin/index', $data);
	}
	public function them()
	{
		$data['title'] = 'Thêm giáo viên mới';
		$data['content'] = 'admin/giaovien/them';
		
		if(isset($_POST['them']))
		{
			$TenGV = $this->input->post('TenGV');
			$mail = $this->input->post('mail');
			$SDT = $this->input->post('SDT');
			
			//upload hình
            $config['upload_path'] = 'images/giaovien/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library("upload", $config);
            if($this->upload->do_upload("Avatar"))
			{
				$img = $this->upload->data();
				$Avatar = $config['upload_path'].$img['file_name'];
				
            }
			else
			{
                $Avatar = 'images/img_avatar.png';
            }
			$dat = array(
				'TenGV' => $TenGV,
				'mail' => $mail,
				'SDT' => $SDT,
				'Avatar' => $Avatar,
			);
			$kq = $this->mgiaovien->them($dat);
			if(isset($kq))
				$data['thongbao'] = '<script>alert("Thêm giáo viên thành công.");location.assign("'.base_url('admin/giaovien').'");</script>';
			else
				$data['thongbao'] = '<script>alert("Thêm mới thất bại.")</script>';
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
		$kq = $this->madmin->capnhat($dat,$id);
		if(isset($kq))
			die(json_encode(1));
		else
			die(json_encode(0));
	}
	
	public function xoa_giaovien()
	{
		$id = $this->input->post('id');
		$kq = $this->mgiaovien->xoa_gv($id);
		if(isset($kq))
			die(json_encode(1));
		else
			die(json_encode(0));
	}
	public function chinhsua($id)
	{
		$data['title'] = 'Chỉnh sửa giáo viên';
		$data['content'] = 'admin/giaovien/chinhsua';
		
		if(isset($_POST['luu']))
		{
			$TenGV = $this->input->post('TenGV');
			$mail = $this->input->post('mail');
			$SDT = $this->input->post('SDT');
			
			//upload hình
            $config['upload_path'] = 'images/giaovien/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library("upload", $config);
            if($this->upload->do_upload("Avatar"))
			{
				$img = $this->upload->data();
				$Avatar = $config['upload_path'].$img['file_name'];
				
            }
			else
			{
                $Avatar = $this->input->post('Avatar_cu');
            }
			$dat = array(
				'TenGV' => $TenGV,
				'mail' => $mail,
				'SDT' => $SDT,
				'Avatar' => $Avatar,
			);
			$kq = $this->mgiaovien->capnhat($dat, $id);
			if(isset($kq))
				$data['thongbao'] = '<script>alert("Chỉnh sửa giáo viên thành công.");location.assign("'.base_url('admin/giaovien').'");</script>';
			else
				$data['thongbao'] = '<script>alert("Thêm mới thất bại.")</script>';
		}
		$data['giaovien'] = $this->mgiaovien->get($id);
		$this->load->view('admin/index', $data);
	}
}
?>
