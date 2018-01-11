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
		$email = $_SESSION['login'];
		$data['title'] = 'CLASS ONLINE | Home';
		$data['active'] = 0;
		$data['thongtin'] = $this->mhocvien->thongtin($email);
<<<<<<< HEAD
		$data['content'] = 'suathongtin';
		$this->load->view('lophoc', $data);
	}
	public function chinhsua($MaHV)
	{
=======
		$data['content'] = 'lophoc/suathongtin';
		$this->load->view('lophoc', $data);
	}
	public function chinhsua()
	{
		$email = $_SESSION['login'];
		$thongtin = $this->mhocvien->thongtin($email);
		$MaHV = $thongtin['MaHV'];
>>>>>>> 8d008b730926480d5d5f303fbe8d257a3a52718b
		if(isset($_POST['capnhat']))
		{
			$ten = $this->input->post('ten');
			$dchi = $this->input->post('dchi');
			$ngsinh = $this->input->post('ngsinh');
			$gtinh = $this->input->post('gtinh');
			$dat = array(
				'ho_ten' => $ten,
				'dia_chi' => $dchi,
				'ngay_sinh' => $ngsinh,
				'gioi_tinh' => $gtinh,
			);
			$this->mhocvien->capnhat($MaHV, $dat);
			redirect(base_url('lophoc'));
			
		}
		//$this->load->view('home');
	}
//	public function dky($MaHV)
//	{
//		if(isset($_POST['capnhat']))
//		{
//			$ten = $this->input->post('ten');
//			$dchi = $this->input->post('dchi');
//			$ngsinh = $this->input->post('ngsinh');
//			$gtinh = $this->input->post('gtinh');
//			$dat = array(
//				'ho_ten' => $ten,
//				'dia_chi' => $dchi,
//				'ngay_sinh' => $ngsinh,
//				'gioi_tinh' => $gtinh,
//			);
//			$this->mhocvien->capnhat($MaHV, $dat);
//			redirect(base_url('lophoc'));
//			
//		}
//		$this->load->view('home');
//	}
}
?>
