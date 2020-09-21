<?php

class Jurusan_model_api extends CI_Model
{
    public function getJurusan($jurusan = null)
    {
        if ($jurusan === null) {
            return $this->db->get('tb_jurusan')->result_array();
        } else {
            return $this->db->get_where('tb_jurusan', ['id_jurusan' => $jurusan])->result_array();
        }
    }
}
