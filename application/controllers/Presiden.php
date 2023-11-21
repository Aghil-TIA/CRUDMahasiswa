<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Presiden extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('presidenModel');		
	}

	function index()
	{
		$data['judul'] = "Dashboard";
		$data['presiden'] = $this->presidenModel->get();
		$this->load->view('layout/header', $data);
		$this->load->view('presiden/index', $data);
		$this->load->view('layout/footer');
	}

	function input()
	{
		$data['judul'] = "Tambah presiden";
		$data['presiden'] = $this->presidenModel->get();
		$this->load->view('layout/header', $data);
		$this->load->view('presiden/input', $data);
		$this->load->view('layout/footer');
	}

	function detail($id)
	{
		$data['judul'] = "Detail presiden";
		$data['presiden'] = $this->presidenModel->getById($id);
		$this->load->view('layout/header', $data);
		$this->load->view('presiden/detail', $data);
		$this->load->view('layout/footer');
	}

	function edit($id)
	{
		$data['judul'] = "Detail presiden";
		$data['presiden'] = $this->presidenModel->getById($id);
		$this->load->view('layout/header', $data);
		$this->load->view('presiden/ubah', $data);
		$this->load->view('layout/footer');
	}

	function hapus($id)
	{
		$this->presidenModel->delete($id);
		redirect('presiden/index');
	}

	function upload()
	{
		$data = [
			'nama' => $this->input->post('nama'),
			'nik' => $this->input->post('nik'),
			'asal' => $this->input->post('asal'),
			'partai' => $this->input->post('partai'),
			'riwayat' => $this->input->post('riwayat'),
			'umur' => $this->input->post('umur'),			
		];
		$this->presidenModel->insert($data);
		redirect('presiden/index');
	}

	function update()
	{
		$data = [
			'nama' => $this->input->post('nama'),
			'nik' => $this->input->post('nik'),
			'asal' => $this->input->post('asal'),
			'partai' => $this->input->post('partai'),
			'riwayat' => $this->input->post('riwayat'),
			'umur' => $this->input->post('umur'),
		];
		$id = $this->input->post('id');
		$this->presidenModel->update(['id' => $id], $data);
		redirect('presiden/index');
	}
}
