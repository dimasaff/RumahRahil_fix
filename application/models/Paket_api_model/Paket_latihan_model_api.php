<?php

class Paket_latihan_model_api extends CI_Model
{
    public function getPaketlatihan($paketlatihan = null)
    {
        if ($paketlatihan === null) {
            return $this->db->get('tb_paket_latihan')->result_array();
        } else {
            return $this->db->get_where('tb_paket_latihan', ['id_paket_latihan' => $paketlatihan])->result_array();
        }
    }

    public function deletePaketlatihan($paketlatihan)
    {
        $this->db->delete('tb_paket_latihan', ['id_paket_latihan' => $paketlatihan]);
        return $this->db->affected_rows();
    }
    public function createPaketlatihan($data)
    {
        $this->db->insert('tb_paket_latihan', $data);
        return $this->db->affected_rows();
    }
    public  function updatePaketlatihan($data, $paketlatihan)
    {
        $this->db->update('tb_paket_latihan', $data, ['id_paket_latihan' => $user]);
        return $this->db->affected_rows();
    }
    public function getPaketSMP()
    {
        return $this->db->query("SELECT*FROM tb_paket_latihan WHERE id_paket_latihan > 0")->result_array();
    }
}
