<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Timkiem extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->lang->load('home','vietnamese');  
		$this->load->helper('url');
		$this->load->model('mtimkiem');
	}
	public function index()
	{
		$tukhoa = $this->input->post('tukhoa');
		$ketqua = $this->mtimkiem->timkiem($tukhoa);
		if(count($ketqua) == 0) {
			echo 'Không có kết quả';
		}
		else {
			foreach($ketqua as $kq) {
				echo '<a href="'.base_url('lop/'.$kq['MaLH']).'">'.$kq['TenMH'].' - '.$kq['TenLH'].'</a>';
			}
		}
	}
}
?>