<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {
 
  public function __construct() {
		parent::__construct();    
    	$this->load->model('Api_model', 'api_model');
  }
	  
function login(){
  foreach ($_REQUEST as $key => $value) {
    $_REQUEST[$key] = str_replace("script","",$this->security->xss_clean($value));
  }
  $method = $_SERVER['REQUEST_METHOD'];
  if($method != 'POST'){
    echo json_encode(array('status' => 400,'message' => 'Bad request.'));
  }else{

    $check_user_resource = $this->api_model->check_user_resource();

    if($check_user_resource == true){

      $params = $_REQUEST; 
      $result_data = array();

      $email = strip_tags($params['email']); 
      $password = strip_tags($params['password']);
      $check_login = $this->api_model->is_user_exist($email , $password);
      if($check_login){  
      if (password_verify($password, $check_login->password)) { 
              $result_data['user_id'] = $check_login->id;
              $result_data['phone'] = $check_login->phone;
              $result_data['f_name'] = $check_login->f_name;
              $result_data['l_name'] = $check_login->l_name;
              $result_data['email'] = $check_login->email;
 
 
              $status = "exist";
 }else{
    $status = "not_exist";
  } 
  
    
  }else{
    $status = "not_exist";
  } 
  $result_data['status'] = $status;
  $results = json_encode($result_data);
  print_r($results);

}else{
  echo json_encode(array('status' => 401,'message' => 'Unauthorized.'));
}
}
}

function add_post(){
  foreach ($_REQUEST as $key => $value) {
    $_REQUEST[$key] = str_replace("script","",$this->security->xss_clean($value));
  }
  $method = $_SERVER['REQUEST_METHOD'];
  if($method != 'POST'){
    echo json_encode(array('status' => 400,'message' => 'Bad request.'));
  }else{

    $check_user_resource = $this->api_model->check_user_resource();

    if($check_user_resource == true){

      $params = $_REQUEST; 
      $result_data = array();
 

 	   $data['title'] = strip_tags($this->input->post('title')); 
 	   $data['description'] = strip_tags($this->input->post('description')); 
 	   $data['user_id'] = strip_tags($this->input->post('user_id'));  
       $add_post = $this->api_model->add_post('posts', $data);

 
      if($add_post){  
       
  $status = "Done";
    
  }else{
    $status = "error";
  } 
  $result_data['status'] = $status;
  $results = json_encode($result_data);
  print_r($results);

}else{
  echo json_encode(array('status' => 401,'message' => 'Unauthorized.'));
}
}
}
 
}
