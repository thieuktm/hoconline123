<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Giaovien extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->lang->load('home','vietnamese'); 
		$this->load->model('Mgiaovien');
	}
	public function index()
	{
		$data['title'] = 'CLASS ONLINE | Home';
		$data['active'] = 1;
		$data['content'] = 'giaovien/content';	
		$data['giaovien1'] = $this->Mgiaovien->giaovien1();
		$data['giaovien2'] = $this->Mgiaovien->giaovien2();
		$data['giaovien3'] = $this->Mgiaovien->giaovien3();
		$data['giaovien4'] = $this->Mgiaovien->giaovien4();
		
		
		$this->load->view('giaovien',$data);
	}
	
	public function giaovien1()
	{
		$data['title'] = 'CLASS ONLINE | Danh Sách Giáo Viên';
		$data['active'] = 2;
		$data['content'] = 'giaovien/giaovien1';
		$data['giaovien1'] = $this->Mgiaovien->giaovien1();
		$this->load->view('giaovien', $data);
	}
	public function giaovien2()
	{
		$data['title'] = 'CLASS ONLINE | Danh Sách Giáo Viên';
		$data['active'] = 3;
		$data['content'] = 'giaovien/giaovien2';
		$data['giaovien2'] = $this->Mgiaovien->giaovien2();
		$this->load->view('giaovien', $data);
	}
	public function giaovien3()
	{
		$data['title'] = 'CLASS ONLINE | Danh Sách Giáo Viên';
		$data['active'] = 4;
		$data['content'] = 'giaovien/giaovien3';
		$data['giaovien3'] = $this->Mgiaovien->giaovien3();
		$this->load->view('giaovien', $data);
	}	
	public function giaovien4()
	{
		$data['title'] = 'CLASS ONLINE | Danh Sách Giáo Viên';
		$data['active'] = 5;
		$data['content'] = 'giaovien/giaovien4';
		$data['giaovien4'] = $this->Mgiaovien->giaovien4();
		$this->load->view('giaovien', $data);
	}
}
