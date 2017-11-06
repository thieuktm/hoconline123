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
		$id = $this->uri->segment('3');
		$data['title'] = 'CLASS ONLINE | Home';
		$data['active'] = 1;
		$data['content'] = 'lophoc/hienthi';
		$data['lophoc_moi'] = $this->Mlophoc->lophoc(3);
		$data['lophoc_hot'] = $this->Mlophoc->lophoc(16);
		$data['cap1'] = $this->Mlophoc->cap1();
		$data['cap2'] = $this->Mlophoc->cap2();
		
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
	public function baihoc()
	{
		$data['title'] = 'CLASS ONLINE | Bài học';
		$data['active'] = 0;
		$data['content'] = 'lophoc/baihoc';
		$this->load->view('lophoc', $data);
	}
}
