<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lophoc extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->lang->load('home','vietnamese');  
	}
	public function index()
	{
		$data['title'] = 'CLASS ONLINE | Home';
		$data['active'] = 1;
		$data['content'] = 'lophoc/content';
		$this->load->view('lophoc',$data);
	}
	public function cap1()
	{
		$data['title'] = 'CLASS ONLINE | Cấp 1';
		$data['active'] = 2;
		$data['content'] = 'lophoc/content';
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
