<?php

class Bab_model_api extends CI_Model
{
    public function getBab($bab = null)
    {
        if ($bab === null) {
            return $this->db->get('tb_bab_latihan')->result_array();
        } else {
            return $this->db->get_where('tb_bab_latihan', ['id_bab_latihan' => $bab])->result_array();
        }
    }

    public function deleteBab($bab)
    {
        $this->db->delete('tb_bab_latihan', ['id_bab_latihan' => $bab]);
        return $this->db->affected_rows();
    }
    public function createBab($data)
    {
        $this->db->insert('tb_bab_latihan', $data);
        return $this->db->affected_rows();
    }
    public  function updateBab($data, $bab)
    {
        $this->db->update('tb_bab_latihan', $data, ['id_bab_latihan' => $user]);
        return $this->db->affected_rows();
    }
}
