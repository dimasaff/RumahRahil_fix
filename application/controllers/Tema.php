<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tema extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_api_model/User_model_api', 'user');
        $this->load->model('Admin_api_model/Kelas_model_api', 'kelas');
        $this->load->model('Admin_api_model/Tema_model_api', 'tema');
    }
    public function index()
    {
        $email = $this->session->userdata('email');
        $data['user'] = $this->user->getUserWhereEmail($email);
        $data['kelas'] = $this->kelas->getKelasSD();
        $data['tema']['tema'] = $this->tema->getTemaJoinKelas();
        $data['title'] = 'Tema';
        if ($this->input->post('kelas') == null) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('SD/tema/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'kelas_id' => $this->input->post('kelas'),
                'nama_tema' => $this->input->post('nama_tema')
            ];
            $this->tema->createTema($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Tambah data Berhasil</div>');
            redirect('Tema');
        }
    }

    public function updateTheme($id)
    {
        $data = [
            'kelas_id' => $this->input->post('kelas'),
            'nama_tema' => $this->input->post('nama_tema')
        ];
        $this->tema->updateTema($data, $id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Update data Berhasil</div>');
        redirect('Tema');
    }

    public function tableTema($val)
    {
        if ($val == 'all') {
            $data['tema'] = $this->tema->getTemaJoinKelas();
        } else {
            $data['tema'] = $this->tema->getTemaJoinKelas($val);
        }
        $this->load->view('SD/tema/table-tema', $data);
    }
    public function deleteTheme($id)
    {
        $this->tema->deleteTema($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Hapus data Berhasil</div>');
        redirect('Tema');
    }
}
