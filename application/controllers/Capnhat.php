<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Capnhat extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->lang->load('home','vietnamese');  
		$this->load->helper('url');
		$this->load->model('mhocvien');
		
	}
	public function index()
	{
		echo $_SESSION['login'];
		//$this->load->view('home');
	}
	public function dangky()
	{
		if(isset($_POST['dangky']))
		{
			$email = $this->input->post('email');
			$pass = $this->input->post('pass');
			$repass = $this->input->post('repass');
			if($this->mhocvien->check_mail($email) == TRUE)
			{
				if($pass == $repass)
				{
					$this->mhocvien->dangky($email,$pass);
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
}
?>
