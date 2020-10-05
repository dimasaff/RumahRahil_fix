<?php

use GuzzleHttp\Client;

class Mapel_model_api extends CI_Model
{
    
    private $_client;

    public function __construct() {
        $this->_client = new Client([
            'base_uri' =>  'http://localhost/RumahRahil/api/'
        ]);
    }

    public function getMapel($mapel = null)
    {
        $response = $this->_client->request('GET', 'admin_api/Mapel_sd_api', [
            'query' => [
                'rahil-key' => 'pls123'
            ]  
         ]);
 
         $result = json_decode($response->getBody()->getContents(), true);
         return $result['data'];
    }


    public function getMapelJoinKelas($kelasId = null)
    {
        if ($kelasId === null) {
            return $this->db->query("SELECT tb_mapel.id_mapel, tb_kelas.id_kelas, tb_kelas.nama_kelas, tb_mapel.kelas_id,tb_mapel.nama_mapel 
                                        FROM tb_kelas JOIN tb_mapel
                                        ON tb_kelas.id_kelas = tb_mapel.kelas_id")->result_array();
        } else {
            return $this->db->query("SELECT tb_mapel.id_mapel, tb_kelas.id_kelas, tb_kelas.nama_kelas, tb_mapel.kelas_id,tb_mapel.nama_mapel 
                                        FROM tb_kelas JOIN tb_mapel
                                        ON tb_kelas.id_kelas = tb_mapel.kelas_id
                                        WHERE tb_mapel.kelas_id = $kelasId")->result_array();
        }
    }
    public function deleteMapel($mapel)
    {
        $this->db->delete('tb_mapel', ['id_mapel' => $mapel]);
        return $this->db->affected_rows();
    }
    public function createMapel($data)
    {
        $this->db->insert('tb_mapel', $data);
        return $this->db->affected_rows();
    }
    public function updateMapel($data, $mapel)
    {
        $this->db->update('tb_mapel', $data, ['id_mapel' => $mapel]);
        return $this->db->affected_rows();
    }

    public function getMapelSMP()
    {
        return $this->db->query("SELECT*FROM tb_mapel WHERE id_mapel > 0")->result_array();
    }
}
