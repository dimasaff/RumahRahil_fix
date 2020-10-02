<?php

use GuzzleHttp\Client;

class Tema_model_api extends CI_Model
{

    private $_client;

    public function __construct() {
        $this->_client = new Client([
            'base_url' =>  'http://localhost/RumahRahil/api/'
        ]);
    }

    public function getTema()
    {
        
        $response = $this->_client->request('GET', 'admin_api/Tema_sd_api', [
           'query' => [
               'rahil-key' => 'pls123'
           ]  
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }
    public function getTemaJoinKelas($kelasId = null)
    {
        if ($kelasId === null) {
            return $this->db->query("SELECT tb_tema_sd.id_tema_sd, tb_kelas.id_kelas, tb_kelas.nama_kelas, tb_tema_sd.kelas_id,tb_tema_sd.nama_tema 
                                        FROM tb_kelas JOIN tb_tema_sd
                                        ON tb_kelas.id_kelas = tb_tema_sd.kelas_id")->result_array();
        } else {
            return $this->db->query("SELECT tb_tema_sd.id_tema_sd, tb_kelas.id_kelas, tb_kelas.nama_kelas, tb_tema_sd.kelas_id,tb_tema_sd.nama_tema 
                                        FROM tb_kelas JOIN tb_tema_sd
                                        ON tb_kelas.id_kelas = tb_tema_sd.kelas_id
                                        WHERE tb_tema_sd.kelas_id = $kelasId")->result_array();
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
    public function updateTema($data, $tema)
    {
        $this->db->update('tb_tema_sd', $data, ['id_tema_sd' => $tema]);
        return $this->db->affected_rows();
    }
}
