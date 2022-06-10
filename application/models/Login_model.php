<?php

class Login_model extends CI_Model {

    public $table = 'db_unificada_users';
    public $id_table = 'id';


public function existe_usuerio($user_name) {
   $this->db->select();
   $this->db->from($this->table);
   $this->db->where("user_name",$user_name);
   $query = $this->db->get();
   return ($query->result())? true : false;

}

public function find($id) {
    $this->db->select();
    $this->db->from($this->table);
    $this->db->where("id",$id);
 
    $query = $this->db->get();
 
    return $query->row();
 
 }

 public function findAll() {
    $this->db->select();
    $this->db->from($this->table);
 
    $query = $this->db->get();
    return $query->result();
 
 }

}