<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lophoc extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->lang->load('home','vietnamese'); 
		$this->load->model('Mlophoc');
		$this->load->model('Mmonhoc');
	}
	public function index()
	{
		$data['title'] = 'CLASS ONLINE | Home';
		$data['active'] = 1;
		$data['content'] = 'lophoc/content';
		$data['menu'] = 'lophoc/menu';
		$data['lophoc_moi'] = $this->Mlophoc->lophoc(3);
		$data['lophoc_hot'] = $this->Mlophoc->lophoc(12);
		$data['cap1'] = $this->Mlophoc->cap(1);
		$data['cap2'] = $this->Mlophoc->cap(2);
		$data['cap3'] = $this->Mlophoc->cap(3);
		$data['cap4'] = $this->Mlophoc->cap(4);
		$data['giaovien1'] = $this->Mlophoc->giaovien1();
		$data['giaovien2'] = $this->Mlophoc->giaovien2();
		$data['giaovien3'] = $this->Mlophoc->giaovien3();
		$data['giaovien4'] = $this->Mlophoc->giaovien4();

		$this->load->view('lophoc',$data);
	}
		public function chitiet($id1)
	 {
		$data['title'] = 'CLASS ONLINE | Home';
		$data['active'] = 0;
		$data['chitiet'] = $this->Mlophoc->chitiet($id);
		$data['content'] = 'lophoc/hienthi';
		$data['menu'] = 'lophoc/menu';
		$this->load->view('lophoc',$data);
	} 
	 	public function chi_tiet()
	{
		$data['title'] = 'CLASS ONLINE | Home';
		$data['active'] = 0;
		$data['menu'] = 'lophoc/menu';
		$data['content'] = 'lophoc/hienthi';
		$data['chi_tiet'] = $this->Mlophoc->chi_tiet();
		$this->load->view('lophoc',$data);
	}
	public function cap1()
	{
		$data['title'] = 'CLASS ONLINE | Cấp 1';
		$data['tencap'] = 'Cấp 1';
		$data['active'] = 2;
		$data['content'] = 'lophoc/cap';
		$data['menu'] = 'lophoc/menu';
		$data['cap'] = $this->Mlophoc->cap(1);
		$this->load->view('lophoc', $data);
	}
	public function cap2()
	{
		$data['title'] = 'CLASS ONLINE | Cấp 2';
		$data['tencap'] = 'Cấp 2';
		$data['active'] = 3;
		$data['content'] = 'lophoc/cap';
		$data['menu'] = 'lophoc/menu';
		$data['cap'] = $this->Mlophoc->cap(2);
		$this->load->view('lophoc', $data);
	}
	public function cap3()
	{
		$data['title'] = 'CLASS ONLINE | Cấp 3';
		$data['tencap'] = 'Cấp 3';
		$data['active'] = 4;
		$data['content'] = 'lophoc/cap';
		$data['menu'] = 'lophoc/menu';
		$data['cap'] = $this->Mlophoc->cap(3);
		$this->load->view('lophoc', $data);
	}
	public function cap4()
	{
		$data['title'] = 'CLASS ONLINE | Đào Tạo Nghề';
		$data['tencap'] = 'Đào Tạo Nghề';
		$data['active'] = 5;
		$data['content'] = 'lophoc/cap';
		$data['menu'] = 'lophoc/menu';
		$data['cap'] = $this->Mlophoc->cap(4);
		$this->load->view('lophoc', $data);
	}
	public function giaovien1()
	{
		$data['title'] = 'CLASS ONLINE | Danh Sách Giáo Viên';
		$data['active'] = 0;
		$data['content'] = 'lophoc/giaovien1';
		$data['menu'] = 'lophoc/menugiaovien';
		$data['giaovien1'] = $this->Mlophoc->giaovien1();
		$this->load->view('lophoc', $data);
	}
	public function giaovien2()
	{
		$data['title'] = 'CLASS ONLINE | Danh Sách Giáo Viên';
		$data['active'] = 0;
		$data['content'] = 'lophoc/giaovien2';
		$data['menu'] = 'lophoc/menugiaovien';
		$data['giaovien2'] = $this->Mlophoc->giaovien2();
		$this->load->view('lophoc', $data);
	}
	public function giaovien3()
	{
		$data['title'] = 'CLASS ONLINE | Danh Sách Giáo Viên';
		$data['active'] = 0;
		$data['content'] = 'lophoc/giaovien3';
		$data['menu'] = 'lophoc/menugiaovien';
		$data['giaovien2'] = $this->Mlophoc->giaovien3();
		$this->load->view('lophoc', $data);
	}
	public function giaovien4()
	{
		$data['title'] = 'CLASS ONLINE | Danh Sách Giáo Viên';
		$data['active'] = 0;
		$data['content'] = 'lophoc/giaovien4';
		$data['menu'] = 'lophoc/menugiaovien';
		$data['giaovien2'] = $this->Mlophoc->giaovien4();
		$this->load->view('lophoc', $data);
	}
	public function baihoc()
	{
		$data['title'] = 'CLASS ONLINE | Bài học';
		$data['active'] = 0;
		$data['content'] = 'lophoc/baihoc';
		$this->load->view('lophoc', $data);
	}
	public function monhoc($id)
	{
		$data['title'] = 'CLASS ONLINE | Môn học';
		$data['active'] = 0;
		$data['content'] = 'lophoc/monhoc';
		$data['monhoc'] = $this->Mmonhoc->monhoc($id);
		$this->load->view('lophoc', $data);
	}
}
