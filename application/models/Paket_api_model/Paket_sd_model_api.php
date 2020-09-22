<?php

class Paket_sd_model_api extends CI_Model
{
    public function getPaketsd($paketsd = null)
    {
        if ($paketsd === null) {
            return $this->db->get('tb_paket_latihan_sd')->result_array();
        } else {
            return $this->db->get_where('tb_paket_latihan_sd', ['id_paket_latihan_sd' => $paketsd])->result_array();
        }
    }

    public function deletePaketsd($paketsd)
    {
        $this->db->delete('tb_paket_latihan_sd', ['id_paket_latihan_sd' => $paketsd]);
        return $this->db->affected_rows();
    }
    public function createPaketsd($data)
    {
        $this->db->insert('tb_paket_latihan_sd', $data);
        return $this->db->affected_rows();
    }
    public  function updatePaketsd($data, $paketsd)
    {
        $this->db->update('tb_paket_latihan_sd', $data, ['id_paket_latihan_sd' => $user]);
        return $this->db->affected_rows();
    }
}
