<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->lang->load('home','vietnamese');  
		$this->load->helper('url');
		$this->load->model('mhocvien');
		$this->load->model('memail');
		
	}
	public function index()
	{
		$this->load->view('home');
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
					$dat = array(
						'email' => $email,
						'pass' => md5($pass),
						'ngay_dk' => $day,
					);
					$this->mhocvien->dangky($dat);
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
	public function dangky_home()
	{
		$ten = $this->input->post('ten');
		$ngsinh = $this->input->post('ngsinh');
		$gioi_tinh = $this->input->post('gioi_tinh');
		$email = $this->input->post('email');
		$pass = $this->input->post('pass');
		$repass = $this->input->post('repass');
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$day = date('Y-m-d H:i:s');
		if($this->mhocvien->check_mail($email) == TRUE)
		{
			if($pass == $repass)
			{
				$dat = array(
					'ho_ten' => $ten,
					'ngay_sinh' => $ngsinh,
					'gioi_tinh' => $gioi_tinh,
					'email' => $email,
					'pass' => md5($pass),
					'ngay_dk' => $day,
				);
				$this->mhocvien->dangky($dat);
				$this->session->set_userdata("login", $email);
				die(json_encode('3'));
			}
			else
				die(json_encode('1'));

		}
		else
			die(json_encode('2'));
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
	public function guitin() 
	{
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		if(isset($_POST['gui']))
		{
			$tieu_de = $this->input->post('title');
			$email = $this->input->post('email');
			$phone = $this->input->post('phone');
			$tin_nhan = $this->input->post('message');
			$ngay_gui = date('Y-m-d H:i:s');
			$dat = array(
				'tieu_de' => $tieu_de,
				'email' => $email,
				'phone' => $phone,
				'tin_nhan' => $tin_nhan,
				'ngay_gui' => $ngay_gui,
			);
			$kq = $this->memail->them($dat);
			if($kq == 1) {
				echo '<script>alert("Gửi tin thành công.");location.assign("'.base_url().'");</script>';
			}
			else {
				echo '<script>alert("Gửi tin thất bại.");location.assign("'.base_url().'");</script>';
			}
		}
	}
	
}
?>
