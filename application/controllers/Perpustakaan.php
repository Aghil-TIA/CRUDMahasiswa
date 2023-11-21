<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perpustakaan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('buku');		
	}

	function index()
	{
		$pinjam = 150;
		$tersedia = 300;
		$rusak = 100;
		$tidakKembali = 200;

		echo "Total Buku yang dipinjam $pinjam <br/>";
		echo "Total Buku yang tersedia $tersedia <br/>";
		echo "Total Buku yang rusak $rusak <br/>";
		echo "Total Buku yang tidak dikembalikan $tidakKembali <br/>";

		echo "<br/>";
		
		$this->buku->total($pinjam, $tersedia, $rusak, $tidakKembali);
		echo "<br/>";
		$this->buku->tersedia($tersedia);
		echo "<br/>";
		$this->buku->destroy($pinjam, $tersedia, $rusak, $tidakKembali);
	}
}
