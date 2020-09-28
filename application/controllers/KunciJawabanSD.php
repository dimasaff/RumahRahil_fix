<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KunciJawabanSD extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_api_model/User_model_api', 'user');
        $this->load->model('Admin_api_model/Subtema_model_api', 'subtema');
        $this->load->model('Paket_api_model/Paket_sd_model_api', 'paket');
        $this->load->model('Kunci_api_model/Kunci_sd_model_api', 'kunci');
    }
    public function index()
    {
        $email = $this->session->userdata('email');
        $data['user'] = $this->user->getUserWhereEmail($email);
        $data['paket'] = $this->paket->getPaketsdJoinSubtema();
        $data['no_soal'] = $this->db->get('tb_no_soal')->result_array();
        $data['kunci'] = $this->kunci->getKunciSdJoinPaketAndNoSoal();
        $data['title'] = 'Kunci Jawaban Soal SD';
        if ($this->input->post('nama_paket_sd') === null) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('SD/kunci/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'paket_latihan_sd_id' => $this->input->post('nama_paket_sd'),
                'no_soal_id' => $this->input->post('no_soal'),
                'jawaban_benar' => $this->input->post('jawaban_benar')
            ];
            $this->kunci->createKuncisd($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Tambah data Berhasil</div>');
            redirect('KunciJawabanSD');
        }
    }
    public function tableKuncisd($val)
    {
        $data['paket'] = $this->paket->getPaketsdJoinSubtema();
        $data['kunci'] = $this->kunci->getKunciSdJoinPaketAndNoSoal($val);
        $data['no_soal'] = $this->db->get('tb_no_soal')->result_array();
        $this->load->view('SD/kunci/table-kunci', $data);
    }
}
