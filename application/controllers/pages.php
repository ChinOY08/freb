<?php

class Pages extends CI_Controller {
	public function index(){
		$this->view();
	}
	public function view()
    {
		if ( ! file_exists(APPPATH.'/views/loginpage.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}

		$data['title'] = ucfirst('loginpage'); // Capitalize the first letter
		if($this->session->userdata('is_logged_in') == 1){
			if($this->session->userdata('usertype') == "STUDENT"){
				redirect('student_profile');
			}else if($this->session->userdata('usertype') == "ADMIN"){
				redirect('add_user');
			}
		}else{
			$this->load->view('templates/header', $data);
			$this->load->view('loginpage', $data);
			$this->load->view('templates/footer', $data);
		}

    }
        
    public function registerpage(){
		$this->load->view('templates/header');
		$this->load->view('user/registerpage');
		$this->load->view('templates/footer');
    }

    public function login_validation(){
		$data['title'] = "CSFREB";
		$this->load->library('form_validation');
		$this->form_validation->set_rules('idnum', 'IDNumber', 'required|trim|xss_clean|callback_validate_credentials');
		//callback_validate_credentials will call validate_credentials() and return true or false
		$this->form_validation->set_rules('password', 'Password', 'required|md5|trim');	
		
		
		if($this->form_validation->run()){
			$this->load->model('model_users');
			
			$row = $this->model_users->what_userType();
			$row =  $this->model_users->get_session($row->id);
			
			$data = array(
				'id' => $row->id,
				'fname' => $row->fname,
				'lname' => $row->lname,
				'course' => $row->course,
				'year' =>$row->year,
				'idnumber' => $row->idnumber,
				'email' => $this->input->post('email'),
				'is_logged_in'=> 1,
				'usertype'=> $row->usertype
			);

			$this->session->set_userdata($data);
			
			if($row->usertype == "STUDENT"){
				redirect('student_profile');	
			}else if($row->usertype == "ADMIN"){
				echo "success";
			}else if($row->usertype == "FACULTY"){
				echo "success";
			}
				
		}else{
			$this->load->view('templates/header',$data);
			$this->load->view('loginpage');
		}
	}

	public function restricted(){
		$this->load->view('restricted');
	}
	
	public function validate_credentials(){
		$this->load->model('model_users');
		
		if($this->model_users->can_log_in()){
			return true;
		}else{
			$this->form_validation->set_message('validate_credentials', 'Incorrect username/password.');
			return false;
		}
	}

	public function signup_validation(){
		$data['title'] = "sign up";
		$data['success'] = ' ';
		$data['notif'] = ' ';
		$this->load->library('form_validation');	
	
		$this->form_validation->set_message('is_unique',"That Email Address is already in use");
		if($this->form_validation->run('users') ){
			
			if($this->input->post('usertype') == 1){
				$this->load->model('model_users');	
				
				if($this->model_users->add_user()){
					$data['success'] = $this->ret_success_notif();
				}else{
					$data['success'] = $this->ret_fail_notif();
				}	
			}else {}//do nothing //**}
				
	    }//end of if
			$this->load->view('templates/header');
			$this->load->view('user/registerpage',$data);
		
	}//end of function

	public function ret_success_notif(){	
		return "<script>var not = $.Notify({
				 	style: {background: 'green', color: 'white'},
    				caption: 'DATABASE',
       				content: 'add to database success!!!',
      			  	timeout: 10000 // 10 seconds
						});
					
					</script>";		
	}
	public function ret_fail_notif(){	
		return "<script>var not = $.Notify({
				 	style: {background: 'green', color: 'white'},
    				caption: 'DATABASE',
       				content: 'add to database success!!!',
      			  	timeout: 10000 // 10 seconds
						});
					
					</script>";		
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('view');	
	}
	
}
