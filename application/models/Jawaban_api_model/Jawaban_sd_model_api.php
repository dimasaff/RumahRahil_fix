<?php

class Jawaban_sd_model_api extends CI_Model
{
    public function getJawabansd($jawabansd = null)
    {
        if ($jawabansd === null) {
            return $this->db->get('tb_jawaban_latihan_sd')->result_array();
        } else {
            return $this->db->get_where('tb_jawaban_latihan_sd', ['id_jawaban_latihan_sd' => $jawabansd])->result_array();
        }
    }

    public function deleteJawabansd($jawabansd)
    {
        $this->db->delete('tb_jawaban_latihan_sd', ['id_jawaban_latihan_sd' => $jawabansd]);
        return $this->db->affected_rows();
    }
    public function createJawabansd($data)
    {
        $this->db->insert('tb_jawaban_latihan_sd', $data);
        return $this->db->affected_rows();
    }
    public  function updateJawabansd($data, $jawabansd)
    {
        $this->db->update('tb_jawaban_latihan_sd', $data, ['id_jawaban_latihan_sd' => $user]);
        return $this->db->affected_rows();
    }
}
