<?php

class Mapel_model_api extends CI_Model
{
    public function getMapel($mapel = null)
    {
        if ($mapel === null) {
            return $this->db->get('tb_mapel')->result_array();
        } else {
            return $this->db->get_where('tb_mapel', ['id_mapel' => $mapel])->result_array();
        }
    }
}
