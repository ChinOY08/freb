<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student extends CI_Controller {
	public function student_profile(){
		if($this->session->userdata('is_logged_in')){
			$this->load->view('templates/header_student');
			$this->load->view('student/student_profile');
		}else{
			redirect('pages/restricted');
		}	
	}
}