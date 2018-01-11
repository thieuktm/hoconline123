<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lop extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->lang->load('home','vietnamese'); 
		$this->load->model('Mlophoc');
	}
	public function index($id)
	{
		if($this->uri->segment('3'))
		{
			$gt = $this->uri->segment('3');
		}
		else
			$gt = 0;
		$data['title'] = 'CLASS ONLINE | Home';
		$data['active'] = 0;
		$data['content'] = 'lophoc/hienthi';
		//thông báo chưa có tài khoản.
		if(!isset($_SESSION['login']))
			
		{ 
			$data['thongbao']= '<script>alert("bạn chưa có đăng ký hoặc đăng nhập trước!");location.assign(" '.base_url('lophoc').' ");</script>';
		    echo($data['thongbao']);
		}
		else
		{
			$data['lophoc_moi'] = $this->Mlophoc->lophoc(3);
			$data['lophoc_hot'] = $this->Mlophoc->lophoc(16);
			$data['cap1'] = $this->Mlophoc->cap1();
			$data['cap2'] = $this->Mlophoc->cap2();
			$data['chitiet'] = $chitiet = $this->Mlophoc->chitiet($id,$gt);
			print_r($id);
			$data['bai_tt'] = $this->Mlophoc->bai_tt($id,$chitiet['Ma_Giaotrinh']);
			$this->load->view('lophoc',$data);
		}
       }
	
	
		public function chitiet($id)
	{
		$data['title'] = 'CLASS ONLINE | Home';
		$data['active'] = 0;
		$data['content'] = 'lophoc/hienthi';
		$data['chitiet'] = $this->Mlophoc->chitiet($id);
		$this->load->view('lophoc',$data);
	}
		public function chi_tiet()
	{
		$data['title'] = 'CLASS ONLINE | Home';
		$data['active'] = 0;
		$data['content'] = 'lophoc/hienthi';
		$data['chi_tiet'] = $this->Mlophoc->chi_tiet();
		$this->load->view('lophoc',$data);
	}
	
	public function cap1()
	{
		$data['title'] = 'CLASS ONLINE | Cấp 1';
		$data['active'] = 2;
		$data['content'] = 'lophoc/cap1';
		$data['cap1'] = $this->Mlophoc->cap1();
		$data['chi_tiet'] = $this->Mlophoc->chi_tiet();
		$data['chitiet'] = $this->Mlophoc->chitiet($id);
		$this->load->view('lophoc', $data);
	}
	public function cap2()
	{
		$data['title'] = 'CLASS ONLINE | Cấp 2';
		$data['active'] = 3;
		$data['content'] = 'lophoc/cap2';
		$data['cap2'] = $this->Mlophoc->cap2();
		$this->load->view('lophoc', $data);
	}
	public function baihoc()
	{
		$data['title'] = 'CLASS ONLINE | Bài học';
		$data['active'] = 0;
		$data['content'] = 'lophoc/baihoc';
		$this->load->view('lophoc', $data);
	}
}
