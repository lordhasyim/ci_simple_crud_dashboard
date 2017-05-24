<?php
/**
 * Created by PhpStorm.
 * User: hasyim
 * Date: 5/24/17
 * Time: 1:28 PM
 */
class Provinsi_model extends CI_Model{

    public function all()
    {
        $hasil = $this->db->get('provinsi');
        if ($hasil->num_rows() > 0 ) {
            return $hasil;
        } else {
            return array();
        }
    }

    public function find($id_provinsi)
    {
        //query mencari berdasarkan id
        $hasil = $this->db->where('id_provinsi', $id_provinsi)
            ->limit(1)
            ->get('provinsi');
        if ($hasil->num_rows() > 0 ){
            return $hasil->row();
        } else {
            return array();
        }
    }

    public function create($data_provinsi)
    {
        $this->db->insert('provinsi', $data_provinsi);
    }

    public function update($id_provinsi, $data_provinsi)
    {
        $this->db->where('id', $id_provinsi)
                  ->update('provinsi', $data_provinsi);
    }

    public function delete($id_provinsi)
    {
        $this->db->where('id_provinsi', $id_provinsi)
                 ->delete('provinsi');
    }

}