<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{       
            $this->load->view('header');
            $this->load->view('login');
            $this->load->view('footer');
	}
        
        public function login()
        { 
            $this->load->library('form_validation');
            
            $data['username'] = $this->input->post('username');
            $data['password'] = $this->input->post('password');
            
            
            $this->form_validation->set_rules('username', 'username', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
           
            if ($this->form_validation->run() == FALSE)
            {   
                //$this->session->set_userdata('error_msg', 'Thank you for your information, we will contact with you soon.'); 
                $this->load->view('header');           
                $this->load->view('login', $data);
                $this->load->view('footer');
            }
            else
            {   
                $this->load->model('Admin_db');                
                $data['password'] = md5($this->input->post('password'));
                $result = $this->Admin_db->login($data);                
                if($result>0){

                $this->session->set_userdata('success_msg', 'Thank you for your information, we will contact with you soon.');                
                $this->load->view('header');           
                $this->load->view('logged_in',$data);
                $this->load->view('footer');
                }
                
                else{
                    
                    $data['password'] = $this->input->post('password');
                    $this->load->view('header');           
                    $this->load->view('login', $data);
                    $this->load->view('footer'); 
                }
            }
            
        }
   
}

