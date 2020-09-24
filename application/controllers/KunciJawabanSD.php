<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KunciJawabanSD extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_api_model/User_model_api', 'user');
        $this->load->model('Paket_api_model/Paket_sd_model_api', 'paket');
        $this->load->model('Kunci_api_model/Kunci_sd_model_api', 'kunci');
    }
    public function index()
    {
        $email = $this->session->userdata('email');
        $data['user'] = $this->user->getUserWhereEmail($email);
        $data['paket'] = $this->paket->getPaketsd();
        $data['kunci']['kunci'] = $this->kunci->getKunciSdJoinPaketAndNoSoal();
        $data['title'] = 'Kunci Jawaban Soal SD';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('SD/kunci/index', $data);
        $this->load->view('templates/footer');
    }
}
