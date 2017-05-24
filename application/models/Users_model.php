<?php
/**
 * Created by PhpStorm.
 * User: hasyim
 * Date: 5/24/17
 * Time: 11:40 AM
 */
class Users_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function checkCredential()
    {
        $username = set_value('username');
        $password = set_value('password');

        $hasil = $this->db->where('username', $username)
                          ->where('password', $password)
                          ->limit('1')
                          ->get('users');
        if ($hasil->num_rows() == 0) {
            return$hasil;
        } else {
            return array();
        }
    }

    public function all()
    {
        $hasil = $this->db->get('users');
        if ($hasil->num_rows() > 0 ){
            return $hasil;
        } else {
            return array();
        }
    }



}