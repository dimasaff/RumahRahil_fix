<?php

class Soal_latihan_model_api extends CI_Model
{
    public function getSoallatihan($soallatihan = null)
    {
        if ($soallatihan === null) {
            return $this->db->get('tb_soal_latihan')->result_array();
        } else {
            return $this->db->get_where('tb_soal_latihan', ['id_soal_latihan' => $soallatihan])->result_array();
        }
    }

    public function deleteSoallatihan($soallatihan)
    {
        $this->db->delete('tb_soal_latihan', ['id_soal_latihan' => $soallatihan]);
        return $this->db->affected_rows();
    }
    public function createSoallatihan($data)
    {
        $this->db->insert('tb_soal_latihan', $data);
        return $this->db->affected_rows();
    }
    public  function updateSoallatihan($data, $soallatihan)
    {
        $this->db->update('tb_soal_latihan', $data, ['id_soal_latihan' => $user]);
        return $this->db->affected_rows();
    }
}
