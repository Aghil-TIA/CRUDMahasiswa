<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
	public function __construct(){
		parent::__construct();
	}

	function index(){
		// $data['judul'] = "Dashboard";
		// $data['isi'] = "Aghil";
		// $this->load->view("index", $data);
		$data['judul'] = "Dashboard";
		$data['isi'] = "Aghil";
		$out = $this->load->view("index", $data, true);
		echo $out;
	}
}
