<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->lang->load('home','vietnamese');  
		$this->load->helper('url');
		$this->load->model('madmin');
		
	}
	public function index()
	{
		if(isset($_POST['dangnhap']))
		{
			$acount = $this->input->post('acount');
			$pass = md5($this->input->post('pass'));
			if($this->madmin->check($acount,$pass) == TRUE)
			{
				$this->session->set_userdata("admin", $acount);
				redirect(base_url('admin'));
			}
			else
				echo '<script>alert("Tài khoản hoặc mật khẩu không đúng.");</script>';
		}
		$this->load->view('admin/login');
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
