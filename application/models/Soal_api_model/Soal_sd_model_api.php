<?php

class Soal_sd_model_api extends CI_Model
{
    public function getSoalsd($soalsd = null)
    {
        if ($soalsd === null) {
            return $this->db->get('tb_soal_latihan_sd')->result_array();
        } else {
            return $this->db->get_where('tb_soal_latihan_sd', ['id_soal_latihan_sd' => $soalsd])->result_array();
        }
    }

    public function deleteSoalsd($soalsd)
    {
        $this->db->delete('tb_soal_latihan_sd', ['id_soal_latihan_sd' => $soalsd]);
        return $this->db->affected_rows();
    }
    public function createSoalsd($data)
    {
        $this->db->insert('tb_soal_latihan_sd', $data);
        return $this->db->affected_rows();
    }
    public  function updateSoalsd($data, $soalsd)
    {
        $this->db->update('tb_soal_latihan_sd', $data, ['id_soal_latihan_sd' => $soalsd]);
        return $this->db->affected_rows();
    }
}
