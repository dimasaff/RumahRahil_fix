<?php

class Tema_model_api extends CI_Model
{
    public function getTema($tema = null)
    {
        if ($tema === null) {
            return $this->db->get('tb_tema_sd')->result_array();
        } else {
            return $this->db->get_where('tb_tema_sd', ['id_tema_sd' => $tema])->result_array();
        }
    }

    public function deleteTema($tema)
    {
        $this->db->delete('tb_tema_sd', ['id_tema_sd' => $tema]);
        return $this->db->affected_rows();
    }
    public function createTema($data)
    {
        $this->db->insert('tb_tema_sd', $data);
        return $this->db->affected_rows();
    }
    public  function updateTema($data, $tema)
    {
        $this->db->update('tb_tema_sd', $data, ['id_tema_sd' => $user]);
        return $this->db->affected_rows();
    }
}
