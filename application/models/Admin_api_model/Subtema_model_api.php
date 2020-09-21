<?php

class Subtema_model_api extends CI_Model
{
    public function getSubtema($subtema = null)
    {
        if ($subtema === null) {
            return $this->db->get('tb_subtema_sd')->result_array();
        } else {
            return $this->db->get_where('tb_subtema_sd', ['id_subtema_sd' => $subtema])->result_array();
        }
    }

    public function deleteSubtema($subtema)
    {
        $this->db->delete('tb_subtema_sd', ['id_subtema_sd' => $subtema]);
        return $this->db->affected_rows();
    }
    public function createSubtema($data)
    {
        $this->db->insert('tb_subtema_sd', $data);
        return $this->db->affected_rows();
    }
    public  function updateSubtema($data, $subtema)
    {
        $this->db->update('tb_subtema_sd', $data, ['id_subtema_sd' => $user]);
        return $this->db->affected_rows();
    }
}
