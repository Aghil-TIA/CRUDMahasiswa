<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('dataModel');
    }

    function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = "Data Diri";
        $data['data'] = $this->dataModel->get();
        $this->load->view('layout/header', $data);
        $this->load->view('data/index', $data);
        $this->load->view('layout/footer');
    }

    function input()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = "Masukkan Data Diri";

        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Nama Wajib di isi'
        ]);
        $this->form_validation->set_rules('tempatLahir', 'Tempat Lahir', 'required', [
            'required' => 'Tempat Lahir Wajib di isi'
        ]);
        $this->form_validation->set_rules('tanggalLahir', 'Tanggal Lahir', 'required', [
            'required' => 'Tanggal Lahir Wajib di isi'
        ]);
        $this->form_validation->set_rules('jenisKelamin', 'Jenis Kelamin', 'required', [
            'required' => 'Jenis Kelamin Wajib di isi'
        ]);
        $this->form_validation->set_rules('agama', 'Agama', 'required', [
            'required' => 'Agama Wajib di isi'
        ]);
        $this->form_validation->set_rules('noHp', 'No HP', 'required|integer', [
            'required' => 'No HP Wajib di isi',
            'integer' => 'Wajib Berisi Angka'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required', [
            'required' => 'Email Wajib di isi'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat Wajib di isi'
        ]);
        $this->form_validation->set_rules('kota', 'Kota', 'required', [
            'required' => 'Kota Wajib di isi'
        ]);
        $this->form_validation->set_rules('negara', 'Negara', 'required', [
            'required' => 'Negara Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('data/input', $data);
            $this->load->view('layout/footer');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'tempatLahir' => $this->input->post('tempatLahir'),
                'tanggalLahir' => $this->input->post('tanggalLahir'),
                'jenisKelamin' => $this->input->post('jenisKelamin'),
                'agama' => $this->input->post('agama'),
                'noHp' => $this->input->post('noHp'),
                'email' => $this->input->post('email'),
                'alamat' => $this->input->post('alamat'),
                'kota' => $this->input->post('kota'),
                'negara' => $this->input->post('negara')
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/images/foto/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->dataModel->insert($data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
            redirect('Data/index');
        }
    }

    function ubah($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = "Edit Data Diri";
        $data['data'] = $this->dataModel->getById($id);

        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Nama Wajib di isi'
        ]);
        $this->form_validation->set_rules('tempatLahir', 'Tempat Lahir', 'required', [
            'required' => 'Tempat Lahir Wajib di isi'
        ]);
        $this->form_validation->set_rules('tanggalLahir', 'Tanggal Lahir', 'required', [
            'required' => 'Tanggal Lahir Wajib di isi'
        ]);
        $this->form_validation->set_rules('jenisKelamin', 'Jenis Kelamin', 'required', [
            'required' => 'Jenis Kelamin Wajib di isi'
        ]);
        $this->form_validation->set_rules('agama', 'Agama', 'required', [
            'required' => 'Agama Wajib di isi'
        ]);
        $this->form_validation->set_rules('noHp', 'No HP', 'required|integer', [
            'required' => 'No HP Wajib di isi',
            'integer' => 'Wajib Berisi Angka'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required', [
            'required' => 'Email Wajib di isi'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat Wajib di isi'
        ]);
        $this->form_validation->set_rules('kota', 'Kota', 'required', [
            'required' => 'Kota Wajib di isi'
        ]);
        $this->form_validation->set_rules('negara', 'Negara', 'required', [
            'required' => 'Negara Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('data/ubah', $data);
            $this->load->view('layout/footer');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'tempatLahir' => $this->input->post('tempatLahir'),
                'tanggalLahir' => $this->input->post('tanggalLahir'),
                'jenisKelamin' => $this->input->post('jenisKelamin'),
                'agama' => $this->input->post('agama'),
                'noHp' => $this->input->post('noHp'),
                'email' => $this->input->post('email'),
                'alamat' => $this->input->post('alamat'),
                'kota' => $this->input->post('kota'),
                'negara' => $this->input->post('negara')
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/images/foto/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $old_image = $data['data']['gambar'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/images/foto/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $id = $this->input->post('id');
            $this->dataModel->update(['id' => $id], $data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success col-12" role="alert">Data Berhasil Diedit!</div>');
            redirect('Data/index');
        }
    }

    function hapus($id)
    {
        $this->dataModel->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        redirect('Data/index');
    }

    function detail($id)
    {
        $data['judul'] = "Detail Data Diri";
        $data['data'] = $this->dataModel->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout/header', $data);
        $this->load->view('data/detail', $data);
        $this->load->view('layout/footer');
    }
}
