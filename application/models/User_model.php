<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Auteur Yirou
 */
class User_model extends CI_Model{
    public $name;
    public $city;
    
    public function __construct() {
        parent::__construct();
    }
    
    public function addUser($name,$city){
        $this->name=$name;
        $this->city=$city;
        $this->db->insert('user',$this);
        return $this->db->insert_id();
    }
}