<?php

class Kunci_sd_model_api extends CI_Model
{
    public function getKuncisd($kuncisd = null)
    {
        if ($kuncisd === null) {
            return $this->db->get('tb_kunci_jawaban_sd')->result_array();
        } else {
            return $this->db->get_where('tb_kunci_jawaban_sd', ['id_kunci_jawaban_sd' => $kuncisd])->result_array();
        }
    }

    public function deleteKuncisd($kuncisd)
    {
        $this->db->delete('tb_kunci_jawaban_sd', ['id_kunci_jawaban_sd' => $kuncisd]);
        return $this->db->affected_rows();
    }
    public function createKuncisd($data)
    {
        $this->db->insert('tb_kunci_jawaban_sd', $data);
        return $this->db->affected_rows();
    }
    public  function updateKuncisd($data, $kuncisd)
    {
        $this->db->update('tb_kunci_jawaban_sd', $data, ['id_kunci_jawaban_sd' => $user]);
        return $this->db->affected_rows();
    }
}
