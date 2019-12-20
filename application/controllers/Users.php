<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

		public function __construct() {
		parent::__construct(); 
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');
    $this->load->model('Users_model', 'Users_model');
  }
	public function index()
	{
		$this->data['users_list'] = $this->Users_model->GetWhere("users", "id", "DESC", array());
		$this->data['view'] = "users_list";
		$this->load->view('layout', $this->data);  
	}
	public function add()
	{$this->data['error']='';
		$this->data['view'] = "add_user"; 
		$this->load->view('layout', $this->data);
	}
	
	public function save_add()
	{ 
	  $sent = 0;
      $data = array();
$array_rules = array(
        array('field' => 'email', 'label' => 'E-mail', 'rules' => 'required|trim'), 
        array('field' => 'password', 'label' => 'Password', 'rules' => 'required|trim'), 
        array('field' => 'phone', 'label' => 'Phone', 'rules' => 'required|trim'), 
        array('field' => 'f_name', 'label' => 'First name', 'rules' => 'required|trim'),
        array('field' => 'l_name', 'label' => 'last name', 'rules' => 'required|trim'), 
      );
      $email = strip_tags($_POST['email']);
      $this->form_validation->set_rules($array_rules);
      $test_mail_found = $this->Users_model->GetWhereNotId('users' , array('email'=>$email) , 0 );
      if ($this->form_validation->run() == false) {
        $this->data['error'] = validation_errors();
		$this->data['view'] = "add_user"; 
		$this->load->view('layout', $this->data);
      } elseif($test_mail_found){
        $this->data['error'] =  'Email already exist'  ; 
		$this->data['view'] = "add_user"; 
		$this->load->view('layout', $this->data);
      }else { 
      foreach ($_POST as $key => $value) {
        if($key!='password')
        {$data[$key] = $value;
		}else {$data['password']= password_hash($value, PASSWORD_DEFAULT);}}
       $insert_result = $this->Users_model->insert_element('users', $data);
     if($insert_result){    
     \redirect(\base_url("users"));      
       }}

	}

	public function edit($id)
	{     
       $data['error']=$data['success']='';
        $this->data['user_data']=$this->Users_model->GetWhere_row("users", "id", "DESC", array('id'=>$id)); 
		$this->data['view'] = "edit_user";
		$this->load->view('layout', $this->data); 	 
		
	}
	public function save_edit($id)
	{ 
	  $sent = 0;
      $data = array();
$array_rules = array(
        array('field' => 'email', 'label' => 'E-mail', 'rules' => 'required|trim'), 
        array('field' => 'password', 'label' => 'Password', 'rules' => 'required|trim'), 
        array('field' => 'phone', 'label' => 'Phone', 'rules' => 'required|trim'), 
        array('field' => 'f_name', 'label' => 'First name', 'rules' => 'required|trim'),
        array('field' => 'l_name', 'label' => 'last name', 'rules' => 'required|trim'), 
      );
      $email = strip_tags($_POST['email']);
      $this->form_validation->set_rules($array_rules);
      $test_mail_found = $this->Users_model->GetWhereNotId('users' , array('email'=>$email) , $id );
      if ($this->form_validation->run() == false) {
        $this->data['error'] = validation_errors();        		
        $this->data['user_data']=$this->Users_model->GetWhere_row("users", "id", "DESC", array('id'=>$id)); 
		$this->data['view'] = "edit_user";
		$this->load->view('layout', $this->data);
      } elseif($test_mail_found){
        $this->data['error'] =  'Email already exist'  ; 		
        $this->data['user_data']=$this->Users_model->GetWhere_row("users", "id", "DESC", array('id'=>$id)); 
		$this->data['view'] = "edit_user";
		$this->load->view('layout', $this->data);
      }else { 
      foreach ($_POST as $key => $value) {
      	if($key!='password')
        {$data[$key] = $value;
		}else {$data['password'] = password_hash($value, PASSWORD_DEFAULT);  }}
       
       $insert_result = $this->Users_model->update_element('users', $data ,$id);
     if($insert_result){    
     \redirect(\base_url("users"));      
       }}

	}

	public function view($id)
	{     
       $data['error']=$data['success']='';
        $this->data['user_data']=$this->Users_model->GetWhere_row("users", "id", "DESC", array('id'=>$id)); 
		$this->data['view'] = "view_user";
		$this->load->view('layout', $this->data); 	 
		
	}	

	  public function delete_item() {
    if ($this->input->is_ajax_request()  ) {
      $id = strip_tags($this->input->post('id'));
      $table = 'users';  
      $this->db->where('id', $id);
      $this->db->delete($table); 
      echo json_encode(array('status' => 'ok'));
    }
  } 
}
