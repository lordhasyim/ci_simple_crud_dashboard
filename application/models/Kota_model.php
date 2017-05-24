<?php
/**
 * Created by PhpStorm.
 * User: hasyim
 * Date: 5/24/17
 * Time: 1:28 PM
 */
class Kota_model extends CI_Model {
    public function all()
    {
        $hasil = $this->db->get('kota');
        if ($hasil->num_rows() > 0 ) {
            return $hasil;
        } else {
            return array();
        }
    }

    public function find($id_kota)
    {
        //query mencari berdasarkan id
        $hasil = $this->db->where('id_kota', $id_kota)
                          ->limit(1)
                          ->get('kota');
        if ($hasil->num_rows() > 0 ){
            return $hasil->row();
        } else {
            return array();
        }
    }

    public function create($data_kota)
    {
        $this->db->insert('kota', $data_kota);
    }

    public function update($id_kota, $data_kota)
    {
        $this->db->where('id', $id_kota)
                 ->update('kota', $data_kota);
    }

    public function delete($id_kota)
    {
        $this->db->where('id_kota', $id_kota)
                 ->delete('kota');
    }
}