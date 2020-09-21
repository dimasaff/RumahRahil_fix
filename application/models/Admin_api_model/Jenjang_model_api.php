<?php

class Jenjang_model_api extends CI_Model
{
    public function getJenjang($jenjang = null)
    {
        if ($jenjang === null) {
            return $this->db->get('tb_jenjang')->result_array();
        } else {
            return $this->db->get_where('tb_jenjang', ['id_jenjang' => $jenjang])->result_array();
        }
    }
}
