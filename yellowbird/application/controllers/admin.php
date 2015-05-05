<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
        
        function __construct() {
            parent::__construct();
            $this->load->helper('form','url');
            $this->load->library('form_validation');
            $this->load->model('Admin_db');
        }
        
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
            
            //$this->load->helper(array('form', 'url')); 
            
            $config = array(
                'upload_path' => "./uploads/",
                'allowed_types' => "gif|jpg|png|jpeg",
                'overwrite' => TRUE,
                'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
                'max_height' => "768",
                'max_width' => "1024"
                );
            
            $this->load->library('upload', $config);
            
            $data['name'] = $this->input->post('name');
            $data['email'] = $this->input->post('email');
            $data['phone'] = $this->input->post('phone');
            
            $this->upload->do_upload();
            
            if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('new_member', $error);
		}
            
            $data[] = $this->upload->data();
            $data['image'] = $data[0]['file_name'];
            $this->form_validation->set_rules('name', 'Name', 'trim');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('phone', 'Phone', 'trim');
            //$this->form_validation->set_rules('subject', 'Subject', 'trim|required|xss_clean');
           

            if ($this->form_validation->run() == FALSE)
            {   
                //$this->session->set_userdata('error_msg', 'Thank you for your information, we will contact with you soon.'); 
                $this->load->view('header');           
                $this->load->view('new_member', $data);
                $this->load->view('footer2');
            }
            else
            {   
               
                $this->Admin_db->insert_member($data); 
               
                $this->session->set_userdata('success_msg', 'New member successfully added.');                
                $this->load->view('header');           
                $this->load->view('logged_in');
                $this->load->view('footer2');
            }
            
            
        }
        
        public function email_list()
        { 
            $this->load->view('header');
            $this->load->view('new_member');
            $this->load->view('footer');
        }
        
        public function delete_member()
        {   
            $data['members'] = $this->Admin_db->all_member();   
           
            $this->load->view('header');
            $this->load->view('delete_member', $data);
            $this->load->view('footer');
        }
        
         public function delete_member2()
        { 
            $id = $this->input->post('id');
            
            $this->Admin_db->delete_member($id);  
            
            $this->session->set_userdata('success_msg', 'Member successfully deleted.');     
            $this->load->view('header');
            $this->load->view('logged_in');
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

