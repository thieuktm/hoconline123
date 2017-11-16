<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lophoc extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->lang->load('home','vietnamese'); 
		$this->load->model('Mgiaovien');
	}
	public function index()
	{
		$data['title'] = 'CLASS ONLINE | Home';
		$data['active'] = 1;
		$data['content'] = 'lophoc/contentgvien';
		$data['lophoc_moi'] = $this->Mgiaovien->lophoc(3);
		$data['lophoc_hot'] = $this->Mgiaovien->lophoc(12);
		$data['cap1'] = $this->Mgiaovien->cap1();
		$data['cap2'] = $this->Mgiaovien->cap2();
		$data['cap3'] = $this->Mgiaovien->cap3();
		$data['cap4'] = $this->Mgiaovien->cap4();
		$data['giaovien1'] = $this->Mgiaovien->giaovien1();
		
		$this->load->view('lophoc',$data);
	}
	public function cap1()
	{
		$data['title'] = 'CLASS ONLINE | Cấp 1';
		$data['active'] = 2;
		$data['content'] = 'lophoc/cap1';
		$data['cap1'] = $this->Mgiaovien->cap1();
		$this->load->view('lophoc', $data);
	}
	public function cap2()
	{
		$data['title'] = 'CLASS ONLINE | Cấp 2';
		$data['active'] = 3;
		$data['content'] = 'lophoc/cap2';
		$data['cap2'] = $this->Mgiaovien->cap2();
		$this->load->view('lophoc', $data);
	}
	public function cap3()
	{
		$data['title'] = 'CLASS ONLINE | Cấp 3';
		$data['active'] = 4;
		$data['content'] = 'lophoc/cap3';
		$data['cap3'] = $this->Mgiaovien->cap3();
		$this->load->view('lophoc', $data);
	}
	public function cap4()
	{
		$data['title'] = 'CLASS ONLINE | Đào Tạo Nghề';
		$data['active'] = 5;
		$data['content'] = 'lophoc/cap4';
		$data['cap4'] = $this->Mgiaovien->cap4();
		$this->load->view('lophoc', $data);
	}
	public function giaovien1()
	{
		$data['title'] = 'CLASS ONLINE | Danh Sách Giáo Viên';
		$data['active'] = 0;
		$data['content'] = 'lophoc/giaovien1';
		$data['giaovien1'] = $this->Mgiaovien->giaovien1();
		$this->load->view('lophoc', $data);
	}
	public function giaovien2()
	{
		$data['title'] = 'CLASS ONLINE | Danh Sách Giáo Viên';
		$data['active'] = 0;
		$data['content'] = 'lophoc/giaovien2';
		$data['giaovien2'] = $this->Mgiaovien->giaovien2();
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
