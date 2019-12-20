<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {

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
    $this->load->model('posts_model', 'posts_model');
  }
	public function index()
	{
		$this->data['view'] = "posts"; 
		$this->load->view('layout', $this->data); 
	} 
	public function list()
	{   $page = $this->input->post('page'); 
		$sql = "SELECT title,description,concat(f_name,l_name) as user_name  from posts join users on users.id=posts.user_id  limit 10 OFFSET  $page " ; 

		$query = $this->db->query($sql);
		$result = $query->result_array();
		$rows = array(); 
		if (isset($result) && count($result) != 0) {
			foreach ($result as $cat) {
				$cat_arr = array(  'title' => $cat['title'], 'description' => $cat['description'] , 'user_name' => $cat['user_name']    );
				array_push($rows, $cat_arr);
			}
		}
 
		  print_r(json_encode($rows));

	} 
	 
}
