<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class Verifylogin extends CI_Controller {
   
   public function __construct() {
    parent::__construct();
	$this->load->model('login_model','',TRUE);
   }
   
   public function index() {
     $this->load->library('form_validation');
	  
      $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
	  $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

      
	 if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('login');
		}
		else
		{
			redirect('home','refresh');
		}
   }
   
   public function check_database($password) {
	 $username = $this->input->post('username');
	 $result = $this->login_model->login_check($username,$password);
	 if($result){
	    //when login successful initial session for user.
	    $sess_array = array();
		foreach ($result as $row){
		  $sess_array = array(
		    'user_id' => $row->id,
			'username' => $row->username
		  );
		  $this->session->set_userdata('logged_in',$sess_array);
		}
		return TRUE;
	 }else{
	   $this->form_validation->set_message('check_database','Invalid username'.$username.' or  password'.$password);
	   return false;
	 }
	}
 
}