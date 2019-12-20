<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/**
 * Description of cdmodel
 *
 * @author http://roytuts.com
 */
class Users_model extends CI_Model {

 
  function __construct() {

  }

  public function GetWhere($table, $order, $order_type, $cond = array()) { 
    if (count($cond) > 0) {
      foreach ($cond as $key => $value) {
        $this->db->where($key, $value);
      }
    }
    $this->db->order_by("$order", "$order_type");
    $query = $this->db->get($table);
    if ($query->num_rows() > 0 ) {
      return $query->result();
    }else{
      return false;
    }
  }

  public function GetWhere_row($table, $order, $order_type, $cond = array()) { 
    if (count($cond) > 0) {
      foreach ($cond as $key => $value) {
        $this->db->where($key, $value);
      }
    }
    $this->db->order_by("$order", "$order_type");
    $query = $this->db->get($table);
    if ($query->num_rows() > 0 ) {
      return $query->row();
    }else{
      return false;
    }
  }

  public function insert_element($table,   $data = array()) { 
    if (count($data) > 0) {
      if($this->db->insert($table, $data)){ 
        return true;
      }else{
      return false;
    }  
    } else{
      return false;
    }   
  }

  public function update_element($table,   $data = array()  ,$id) { 
    if (count($data) > 0) {
        $this->db->where('id', $id);  
//echo $this->db->last_query();die;
      if($this->db->update($table, $data)){ 
        return true;
      }else{
      return false;
    }  
    } else{
      return false;
    }   
  }

  public function GetWhereNotId($table, $cond = array(), $id) {  
    if (count($cond) > 0) {
      foreach ($cond as $key => $value) {
        $this->db->where($key, $value);
      }
    }
    $this->db->where("id !=", $id);

    $query = $this->db->get($table);
    if ($query->num_rows() > 0 ) {
      return $query->result();
    }else{
      return false;
    }
  } 

   }

   /* End of file cdmodel.php */
/* Location: ./application/models/cdmodel.php */