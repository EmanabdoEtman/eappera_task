<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/**
 * Description of cdmodel
 *
 * @author http://roytuts.com
 */
class Api_model extends CI_Model {
 
    var $user_resource = "task_app";
    var $key       = "task_key";

  function __construct() {

  }

   public function check_user_resource(){
        $user_resource = $this->input->get_request_header('user_resource', TRUE);
        $key  = $this->input->get_request_header('key', TRUE);
        
        if($user_resource == $this->user_resource && $key == $this->key){
            return true;
        }else{
            return false;
        }
  
    }

   

    function is_user_exist($email , $password)
    { 
      $this->db->where('email', $email); 

      $this->db->from('users');

      $results = $this->db->get();

      if ($results->num_rows() != 0) {

        return $results->row();

      } else {

        return false;

      }

    }
   
  public function add_post($table,   $data = array()) { 
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

   }
 