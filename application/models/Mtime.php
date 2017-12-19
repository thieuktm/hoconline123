<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mtime extends CI_Model{

	public function __construct() {
	parent::__construct();
	}

	public function chuan_time($str)
	{
		str_replace( 'T', ' ', $str);
		$time = strtotime($str.":00");
		return date("Y-m-d H:i:s", $time);
	}
	public function in_time($str)
	{
		$str = str_replace( ' ', 'T', $str);
		$time = substr( $str,  0, 16);
		return $time;
	}
}