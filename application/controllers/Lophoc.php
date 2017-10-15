<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lophoc extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->lang->load('home','vietnamese');  
	}
	public function index()
	{
		$data['active'] = 1;
		$this->load->view('lophoc',$data);
	}
	public function cap1()
	{
		$data['active'] = 2;
		$this->load->view('lophoc', $data);
	}
}
