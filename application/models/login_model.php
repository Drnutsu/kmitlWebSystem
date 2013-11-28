<?php 
  class Login_model extends CI_Model {
	
	public function login_check($username,$password){
	   $this->db->select('user_id, username, password');
	   $this->db->from('user_data');
	   $this->db->where('username',$username);
	   $this->db->where('password',$password);
	   $this-> db -> limit(1);
	   
	   $query = $this->db->get();
	   if($query -> num_rows() == 1){
	    return $query->result();
	   }else{
	    return false;
	   }
	   
	}
	
	
  }