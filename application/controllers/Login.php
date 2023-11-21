<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('userModel', 'userrole');
	}

	function index()
	{
		$data['judul'] = "Halaman Login";
		if ($this->session->userdata('email')) {
			redirect('Mahasiswa');
		}

		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
			'valid_email' => 'Email Harus Valid',
			'required' => 'Email Wajib di isi'
		]);

		$this->form_validation->set_rules('password', 'Password', 'trim|required', [
			'required' => 'Password Wajib di isi'
		]);

		if ($this->form_validation->run() == false) {
			$data['judul'] = "Halaman Login";
			$this->load->view('layout/headerLogin');
			$this->load->view('auth/login');
			$this->load->view('layout/footerLogin');
		} else {
			$this->cek_login();
		}
	}

	function regis()
	{
		if ($this->session->userdata('email')) {
			redirect('Mahasiswa');
		}
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
			'is_unique' => 'Email ini sudah terdaftar',
			'valid_email' => 'Email harus valid',
			'required' => 'Email wajib di isi'
		]);

		$this->form_validation->set_rules(
			'password',
			'Password',
			'required|trim|min_length[5]|matches[password1]',
			[
				'matches' => 'Password Tidak Sama',
				'min_length' => 'Password Terlalu Pendek',
				'required' => 'Password harus diisi'
			]
		);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password]');
		if ($this->form_validation->run() == false) {
			$data['judul'] = "Halaman Register";
			$this->load->view('layout/headerLogin', $data);
			$this->load->view('auth/register');
			$this->load->view('layout/footerLogin');
		} else {
			$data = [
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'gambar' => 'person.png',
				'role' => "User",
				'date_created' => time()
			];
			$this->userrole->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> 
			Selamat Akunmu telah berhasil terdaftar, Silahkan Login! </div>');
			redirect('Login');
		}
	}

	function cek_login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$user = $this->db->get_where('user', ['email' => $email])->row_array();

		if ($user) {
			if (password_verify($password, $user['password'])) {
				$data = [
					'email' => $user['email'],
					'role' => $user['role'],
					'id' => $user['id'],
				];
				$this->session->set_userdata($data);

				if ($user['role'] == 'Admin') {
					redirect('Mahasiswa/mahasiswa');
				} else {
					redirect('Profile');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
				redirect('Login');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Belum Terdaftar!</div>');
			redirect('Login');
		}
	}

	function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Logout!</div>');
		redirect('Login');
	}
}
