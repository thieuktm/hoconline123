<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if(!isset($_SESSION['admin']))
		{
			redirect(base_url('admin/login'));
		}
		$this->lang->load('home','vietnamese');  
		$this->load->helper('url');
		$this->load->model('mhocvien');
		
	}
	public function index()
	{
		$data['title'] = 'Trang quản trị';
		$data['content'] = 'admin/home';
		$this->load->view('admin/index', $data);
	}
	public function dangky()
	{
		if(isset($_POST['dangky']))
		{
			$email = $this->input->post('email');
			$pass = $this->input->post('pass');
			$repass = $this->input->post('repass');
			date_default_timezone_set('Asia/Ho_Chi_Minh');
			$day = date('Y-m-d H:i:s');
			if($this->mhocvien->check_mail($email) == TRUE)
			{
				if($pass == $repass)
				{
					$this->mhocvien->dangky($email,$pass,$day);
					$this->session->set_userdata("login", $email);
					redirect(base_url('capnhat'));
				}
				else
					echo '<script>alert("Mật khẩu không đúng.");</script>';
			}
			else
				echo '<script>alert("Tài khoản đã tồn tại.");</script>';
		}
		//$this->load->view('home');
	}
	public function dangnhap()
	{
		if(isset($_POST['dangnhap']))
		{
			$email = $this->input->post('email');
			$pass = md5($this->input->post('pass'));
			if($this->mhocvien->check_mail_pass($email,$pass) == TRUE)
			{
				$this->session->set_userdata("login", $email);
				redirect(base_url('lophoc'));
			}
			else
				echo '<script>alert("Tài khoản hoặc mật khẩu không đúng.");</script>';
		}
		//$this->load->view('home');
	}
	public function dangxuat()
	{
		//đăng xuất
		$this->session->unset_userdata("login");
		redirect(base_url());
		//view
		
	}
	public function chinhsuathongtin()
	{
		//đăng xuất
		$this->chinhsuathongtin("suathongtin");
		
		$this->session->unset_userdata("home");
		redirect(base_url());
		//view
		
	}
	
	
}
?>
