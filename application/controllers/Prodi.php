<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
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

	function prodi()
	{
		$data['judul'] = "Data Prodi";
		$data['prodi'] = $this->prodiModel->get();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('layout/header', $data);
		$this->load->view('prodi/prodi', $data);
		$this->load->view('layout/footer');
	}

	function input()
	{
		$data['judul'] = "Tambah Prodi";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('prodi', 'Prodi', 'required', [
			'required' => 'Prodi Wajib di isi'
		]);
		$this->form_validation->set_rules('ruangan', 'Ruangan', 'required|integer', [
			'required' => 'Ruangan Wajib di isi',
			'integer' => 'Wajib Berisi Angka'
		]);
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'required', [
			'required' => 'Jurusan Wajib di isi'
		]);
		$this->form_validation->set_rules('akreditasi', 'Akreditasi', 'required', [
			'required' => 'Akreditasi Wajib di isi'
		]);
		$this->form_validation->set_rules('kaprodi', 'Kaprodi', 'required', [
			'required' => 'Kaprodi Wajib di isi'
		]);
		$this->form_validation->set_rules('tahun', 'Tahun Berdiri', 'required', [
			'required' => 'Tahun Berdiri Wajib di isi'
		]);
		$this->form_validation->set_rules('lulusan', 'Output Lulusan', 'required', [
			'required' => 'No HP Mahasiswa Wajib di isi',
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view('layout/header', $data);
			$this->load->view('prodi/input');
			$this->load->view('layout/footer');
		} else {
			$data = [
				'nama' => $this->input->post('kaprodi'),
				'ruangan' => $this->input->post('ruangan'),
				'jurusan' => $this->input->post('jurusan'),
				'akreditasi' => $this->input->post('akreditasi'),
				'namaProdi' => $this->input->post('prodi'),
				'tahunBerdiri' => $this->input->post('tahun'),
				'outputLulusan' => $this->input->post('lulusan')
			];
			$upload_image = $_FILES['gambar']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/images/img/';
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('gambar')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			$this->prodiModel->insert($data, $upload_image);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">', 'Data Berhasil Ditambahkan! </div>');
			redirect('Prodi/prodi');
		}
	}

	function detail($id)
	{
		$data['judul'] = "Detail Mahasiswa";
		$data['prodi'] = $this->prodiModel->getById($id);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('layout/header', $data);
		$this->load->view('prodi/detail', $data);
		$this->load->view('layout/footer');
	}

	function edit($id)
	{
		$data['judul'] = "Edit Prodi";
		$data['prodi'] = $this->prodiModel->getById($id);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('prodi', 'Prodi', 'required', [
			'required' => 'Prodi Wajib di isi'
		]);
		$this->form_validation->set_rules('ruangan', 'Ruangan', 'required|integer', [
			'required' => 'Ruangan Wajib di isi',
			'integer' => 'Wajib Berisi Angka'
		]);
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'required', [
			'required' => 'Jurusan Wajib di isi'
		]);
		$this->form_validation->set_rules('akreditasi', 'Akreditasi', 'required', [
			'required' => 'Akreditasi Wajib di isi'
		]);
		$this->form_validation->set_rules('kaprodi', 'Kaprodi', 'required', [
			'required' => 'Kaprodi Wajib di isi'
		]);
		$this->form_validation->set_rules('tahun', 'Tahun Berdiri', 'required', [
			'required' => 'Tahun Berdiri Wajib di isi'
		]);
		$this->form_validation->set_rules('lulusan', 'Output Lulusan', 'required', [
			'required' => 'No HP Mahasiswa Wajib di isi',
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view('layout/header', $data);
			$this->load->view('prodi/ubah', $data);
			$this->load->view('layout/footer');
		} else {
			$data = [
				'nama' => $this->input->post('prodi'),
				'ruangan' => $this->input->post('ruangan'),
				'jurusan' => $this->input->post('jurusan'),
				'akreditasi' => $this->input->post('akreditasi'),
				'namaProdi' => $this->input->post('kaprodi'),
				'tahunBerdiri' => $this->input->post('tahun'),
				'outputLulusan' => $this->input->post('lulusan')
			];
			$upload_image = $_FILES['gambar']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/images/img/';
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('gambar')) {
					$old_image = $data['prodi']['gambar'];
					if ($old_image != 'default.jpg') {
						unlink(FCPATH . 'assets/imges/img/' . $old_image);
					}
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			$id = $this->input->post('id');
			$this->prodiModel->update(['id' => $id], $data, $upload_image);
			$this->session->set_flashdata('message', '<div class="alert alert-success col-12" role="alert">Data Prodi Berhasil Diedit!</div>');
			redirect('Prodi/prodi');
		}
	}

	function hapus($id)
	{
		$this->prodiModel->delete($id);
		$error = $this->db->error();

		if ($error['code'] != 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle>"</i>Data tidak dapat dihapus (sudah berelasi)!</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-info-circle>"</i>Data Prodi Berhasil Dihapus!</div>');
		}
		redirect('Prodi/prodi');
	}
}
