<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lophoc extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->lang->load('home','vietnamese'); 
		$this->load->model('Mlophoc');
	}
	public function index()
	{
		$data['title'] = 'CLASS ONLINE | Home';
		$data['active'] = 1;
		$data['content'] = 'lophoc/content';
		$data['lophoc_moi'] = $this->Mlophoc->lophoc(3);
		$data['lophoc_hot'] = $this->Mlophoc->lophoc(12);
		$data['cap1'] = $this->Mlophoc->cap1();
		$data['cap2'] = $this->Mlophoc->cap2();
		$data['cap3'] = $this->Mlophoc->cap3();
		$data['cap4'] = $this->Mlophoc->cap4();

		
		
		$this->load->view('lophoc',$data);
	}
	public function cap1()
	{
		$data['title'] = 'CLASS ONLINE | Cấp 1';
		$data['active'] = 2;
		$data['content'] = 'lophoc/cap1';
		$data['cap1'] = $this->Mlophoc->cap1();
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
	public function cap3()
	{
		$data['title'] = 'CLASS ONLINE | Cấp 3';
		$data['active'] = 4;
		$data['content'] = 'lophoc/cap3';
		$data['cap3'] = $this->Mlophoc->cap3();
		$this->load->view('lophoc', $data);
	}
	public function cap4()
	{
		$data['title'] = 'CLASS ONLINE | Đào Tạo Nghề';
		$data['active'] = 5;
		$data['content'] = 'lophoc/cap4';
		$data['cap4'] = $this->Mlophoc->cap4();
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
