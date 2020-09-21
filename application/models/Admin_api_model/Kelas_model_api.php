<?php

class Kelas_model_api extends CI_Model
{
    public function getKelas($kelas = null)
    {
        if ($kelas === null) {
            return $this->db->get('tb_kelas')->result_array();
        } else {
            return $this->db->get_where('tb_kelas', ['id_kelas' => $kelas])->result_array();
        }
    }
}
