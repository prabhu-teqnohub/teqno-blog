<?php

class User_model extends CI_model{
    public function insert_data($data){
        $this->db->insert('login_data',$data);
    }
}







?>