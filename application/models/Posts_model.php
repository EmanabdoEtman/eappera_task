<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/**
 * Description of cdmodel
 *
 * @author http://roytuts.com
 */
class Posts_model extends CI_Model {

  private $table = 'posts';

  function __construct() {

  }

  public function GetWhere($table, $order, $order_type, $cond = array()) { 
    if (count($cond) > 0) {
      foreach ($cond as $key => $value) {
        $alt->where($key, $value);
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