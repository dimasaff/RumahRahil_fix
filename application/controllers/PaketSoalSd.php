<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PaketSoalSd extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_api_model/User_model_api', 'user');
        $this->load->model('Admin_api_model/Subtema_model_api', 'Subtema');
    }
    public function index()
    {
        $email = $this->session->userdata('email');
        $data['user'] = $this->user->getUserWhereEmail($email);
        $data['subtema'] = $this->Subtema->getSubtema();
        $data['title'] = 'Paket Soal SD';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('SD/paket/index', $data);
        $this->load->view('templates/footer');
    }
}
