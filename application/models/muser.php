<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of users
 *
 * @author User
 */
class Muser extends CI_Model {
  private $_table="default_user";
  public function __construct() {
    parent::__construct();
    $this->load->database();
  }

  public function listall() {
    $query = $this->db->get($this->_table);
    return $query->result_array();
  }
  
  public function getById($id) {
    $query = $this->db
                  ->where('ID',$id)
                  ->get($this->_table);
    return $query->result_array();
  }

}
