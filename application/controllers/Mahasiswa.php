<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mahasiswaModel');
		$this->load->model('prodiModel');
	}

	function index()
	{
		$data['judul'] = "Dashboard";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('layout/header', $data);
		$this->load->view('mahasiswa/index', $data);
		$this->load->view('layout/footer');
	}

	function mahasiswa()
	{
		$data['judul'] = "Data Mahasiswa";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['mahasiswa'] = $this->mahasiswaModel->get();
		$this->load->view('layout/header', $data);
		$this->load->view('mahasiswa/mahasiswa', $data);
		$this->load->view('layout/footer', $data);
	}

	function input()
	{
		$data['judul'] = "Tambah Mahasiswa";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['prodi'] = $this->prodiModel->get();
		$this->form_validation->set_rules('nama', 'Nama Mahasiswa', 'required', [
			'required' => 'Nama Mahasiswa Wajib di isi'
		]);
		$this->form_validation->set_rules('nim', 'NIM', 'required', [
			'required' => 'NIM Mahasiswa Wajib di isi'
		]);
		$this->form_validation->set_rules('email', 'Email', 'required', [
			'required' => 'Email Mahasiswa Wajib di isi'
		]);
		$this->form_validation->set_rules('prodi', 'Prodi', 'required', [
			'required' => 'Prodi Mahasiswa Wajib di isi'
		]);
		$this->form_validation->set_rules('alamat', 'Alamat', 'required', [
			'required' => 'Alamat Mahasiswa Wajib di isi'
		]);
		$this->form_validation->set_rules('asalSekolah', 'Asal Sekolah', 'required', [
			'required' => 'Asal Sekolah Mahasiswa Wajib di isi'
		]);
		$this->form_validation->set_rules('noHp', 'No HP', 'required|integer', [
			'required' => 'No HP Mahasiswa Wajib di isi',
			'integer' => 'No HP harus angka'
		]);
		$this->form_validation->set_rules('jenisKelamin', 'Jenis Kelamin', 'required', [
			'required' => 'Jenis Kelamin Mahasiswa Wajib di isi'
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view('layout/header', $data);
			$this->load->view('mahasiswa/input', $data);
			$this->load->view('layout/footer', $data);
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'nim' => $this->input->post('nim'),
				'email' => $this->input->post('email'),
				'prodi' => $this->input->post('prodi'),
				'alamat' => $this->input->post('alamat'),
				'jenisKelamin' => $this->input->post('jenisKelamin'),
				'asalSekolah' => $this->input->post('asalSekolah'),
				'noHp' => $this->input->post('noHp')
			];
			$this->mahasiswaModel->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success col-12" role="alert">Data Mahasiswa Berhasil Ditambahkan!</div>');
			redirect('Mahasiswa/mahasiswa');
		}
	}

	function edit($id)
	{
		$data['judul'] = "Edit Mahasiswa";
		$data['mahasiswa'] = $this->mahasiswaModel->getById($id);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['prodi'] = $this->prodiModel->get();
		$this->form_validation->set_rules('nama', 'Nama Mahasiswa', 'required', [
			'required' => 'Nama Mahasiswa Wajib di isi'
		]);
		$this->form_validation->set_rules('nim', 'NIM', 'required', [
			'required' => 'NIM Mahasiswa Wajib di isi'
		]);
		$this->form_validation->set_rules('email', 'Email', 'required', [
			'required' => 'Email Mahasiswa Wajib di isi'
		]);
		$this->form_validation->set_rules('prodi', 'Prodi', 'required', [
			'required' => 'Prodi Mahasiswa Wajib di isi'
		]);
		$this->form_validation->set_rules('alamat', 'Alamat', 'required', [
			'required' => 'Alamat Mahasiswa Wajib di isi'
		]);
		$this->form_validation->set_rules('asalSekolah', 'Asal Sekolah', 'required', [
			'required' => 'Asal Sekolah Mahasiswa Wajib di isi'
		]);
		$this->form_validation->set_rules('noHp', 'No HP', 'required|numeric', [
			'required' => 'NO HP Mahasiswa Wajib di isi',
			'numeric' => 'NO HP harus Angka'
		]);
		$this->form_validation->set_rules('jenisKelamin', 'Jenis Kelamin', 'required', [
			'required' => 'Jenis Kelamin Mahasiswa Wajib di isi',

		]);
		if ($this->form_validation->run() == false) {
			$this->load->view('layout/header', $data);
			$this->load->view('mahasiswa/ubah', $data);
			$this->load->view('layout/footer');
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'nim' => $this->input->post('nim'),
				'jenisKelamin' => $this->input->post('jenisKelamin'),
				'email' => $this->input->post('email'),
				'prodi' => $this->input->post('prodi'),
				'asalSekolah' => $this->input->post('asalSekolah'),
				'noHp' => $this->input->post('noHp'),				
				'alamat' => $this->input->post('alamat')
			];
			$id = $this->input->post('id');
			$this->mahasiswaModel->update(['id' => $id], $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data mahasiswa berhasil diubah!</div>');
			redirect('Mahasiswa/mahasiswa');
		}
	}
	function hapus($id)
	{
		$this->mahasiswaModel->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Mahasiswa Berhasil Dihapus!</div>');
		redirect('Mahasiswa/mahasiswa');
	}

	function detail($id)
	{
		$data['judul'] = "Detail Mahasiswa";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['mahasiswa'] = $this->mahasiswaModel->getById($id);
		$this->load->view('layout/header', $data);
		$this->load->view('mahasiswa/detail', $data);
		$this->load->view('layout/footer', $data);
	}

}
