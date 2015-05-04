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
                
                $sdata['username'] = $data['username'];            
                $sdata['visitor'] = md5('yellowbird');
                
                $this->session->set_userdata($sdata);
                
                //$this->session->set_userdata('success_msg', 'Thank you for your information, we will contact with you soon.');                
                $this->load->view('header');           
                $this->load->view('logged_in',$sdata);
                $this->load->view('footer');
                }
                
                else{
                    $data['error_msg'] = "Username/Password mismatch. Please provide correct information";
                    $data['password'] = $this->input->post('password');
                    $this->load->view('header');           
                    $this->load->view('login', $data);
                    $this->load->view('footer'); 
                }
            }
            
        }
        
        public function logout(){
            $this->session->sess_destroy();
            $this->load->view('header');           
            $this->load->view('login');
            $this->load->view('footer'); 
        }
        
        public function new_member()
        { 
            $this->load->view('header');
            $this->load->view('new_member');
            $this->load->view('footer');
        }
        
        public function new_member2()
        {   
             
            $this->load->library('form_validation');
            
            $data['name'] = $this->input->post('name');
            $data['email'] = $this->input->post('email');
            $data['phone'] = $this->input->post('phone');
            $data['image'] = $this->input->post('image');
            
            $this->form_validation->set_rules('name', 'Name', 'trim');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('phone', 'Phone', 'trim');
            //$this->form_validation->set_rules('subject', 'Subject', 'trim|required|xss_clean');
           

            if ($this->form_validation->run() == FALSE)
            {   
                //$this->session->set_userdata('error_msg', 'Thank you for your information, we will contact with you soon.'); 
                $this->load->view('header');           
                $this->load->view('form1', $data);
                $this->load->view('footer2');
            }
            else
            {   
                $this->load->model('Newsletter');
                
                $this->Newsletter->insert($data); 
                $to = $data['email'];
                $message = "Thank you for contacting with us. we will inform you about it within a short time.";
                mail($to,"Contact with Yellow Bird",$message);
                
                $this->session->set_userdata('success_msg', 'Thank you for your information, we will contact with you soon.');                
                $this->load->view('header');           
                $this->load->view('home',$data);
                $this->load->view('footer2');
            }
            
            $this->load->view('header');
            $this->load->view('new_member');
            $this->load->view('footer');
        }
        
        public function email_list()
        { 
            $this->load->view('header');
            $this->load->view('new_member');
            $this->load->view('footer');
        }
        
        public function delete_member()
        { 
            $this->load->view('header');
            $this->load->view('new_member');
            $this->load->view('footer');
        }
        
        public function edit_member()
        { 
            $this->load->view('header');
            $this->load->view('new_member');
            $this->load->view('footer');
        }
        
        public function more_info_list()
        { 
            $this->load->view('header');
            $this->load->view('new_member');
            $this->load->view('footer');
        }
   
}

