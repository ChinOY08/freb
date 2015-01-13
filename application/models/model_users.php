<?php

class Model_users extends CI_Model{

	public function can_log_in(){

		
		$this->db->where('idnumber', $this->input->post('idnum'));
		$this->db->where('password', md5($this->input->post('password')));
		
		$query = $this->db->get('user');
		
		if($query->num_rows() == 1 ){
			return true;	
		}else{
			return false;
		}
	}

	public function what_userType(){
		$this->db->select('id, usertype');
		$this->db->where('idnumber', $this->input->post('idnum'));
		$query = $this->db->get('user');
		$row = $query->row();
		 return $row;
		
	}


	public function get_session($id){
		$this->db->where('id',$id);
		$this->db->from('user');
		$query = $this->db->get();
		
		return  $query->row();
	}

	public function add_user(){
		$data = array(
			'fname' => $this->input->post('fname'),
			'lname' => $this->input->post('lname'),
			'course' => $this->input->post('course'),
			'year' => $this->input->post('year'),
			'idnumber' => $this->input->post('idnum'),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password')),
			
			'usertype' => $this->input->post('usertype'),	
		);	
		
		$query = $this->db->insert('user',$data);
		if($query){
			return true;
		}else{
			return false;
		}
	}
}