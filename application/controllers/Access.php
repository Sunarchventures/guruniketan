<?php

class Access extends CI_Controller{


	function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->database(); 
     	 $this->load->helper('form');
		 $this->load->library('form_validation');
		 $this->load->model('db_access');
      } 

		 public function index() { 
         $this->load->view('login');

      } 

      public function user_login(){

      	 $this->form_validation->set_rules('user_id','required|valid_email');
         $this->form_validation->set_rules('user_pwd','trim|required');  

        if($this->form_validation->run() == FALSE){
			
			$data = array(
				'user_id' => $this->input->post('user_id'),
				'user_pwd' => $this->input->post('user_pwd')
			);    	
			$result = $this->db_access->login_now($data);

			if($result == TRUE){
				$data = array(
					'success_message' => 'Successful'
				);
				$this->load->view('login', $data);
			}else{
				$data = array(
				'error_message' => 'Invalid Username or Password'
				);
				$this->load->view('login', $data);
			}
    	}
 
     }

}     
?>