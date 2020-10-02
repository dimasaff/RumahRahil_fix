<?php

use GuzzleHttp\Client;

class Subtema_model_api extends CI_Model
{

    private $_client;

    public function __construct() {
        $this->_client = new Client([
            'base_uri' =>  'http://localhost/RumahRahil/api/'
        ]);
    }

    public function getSubtema($subtema = null)
    {
        $response = $this->_client->request('GET', 'admin_api/Subtema_sd_api', [
            'query' => [
                'rahil-key' => 'pls123'
            ]  
         ]);
 
         $result = json_decode($response->getBody()->getContents(), true);
         return $result['data'];
    }
    public function getSubtemaJoinWithTema($id = null)
    {
        if ($id === null) {
            return $this->db->query("SELECT tb_tema_sd.nama_tema, tb_subtema_sd.id_subtema_sd, tb_subtema_sd.tema_sd_id, tb_subtema_sd.nama_subtema
            FROM tb_tema_sd JOIN tb_subtema_sd
            ON tb_tema_sd.id_tema_sd = tb_subtema_sd.tema_sd_id")->result_array();
        } else {
            return $this->db->query("SELECT tb_tema_sd.nama_tema, tb_subtema_sd.id_subtema_sd, tb_subtema_sd.tema_sd_id, tb_subtema_sd.nama_subtema
            FROM tb_tema_sd JOIN tb_subtema_sd
            ON tb_tema_sd.id_tema_sd = tb_subtema_sd.tema_sd_id
            WHERE tb_subtema_sd.tema_sd_id = $id")->result_array();
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
        $this->db->update('tb_subtema_sd', $data, ['id_subtema_sd' => $subtema]);
        return $this->db->affected_rows();
    }
}
