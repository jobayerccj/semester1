<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{       
            $this->load->view('header');
            $this->load->view('home');
            $this->load->view('footer');
	}
        
        public function home2()
	{       
            $this->load->view('header2');
            $this->load->view('home');
            $this->load->view('footer');
	}
        
        public function about()
        { 
            $this->load->model('Admin_db');
            $data['members'] = $this->Admin_db->all_member();  
            
            $this->load->view('header');
            $this->load->view('about', $data);
            $this->load->view('footer2');
        }
        
        public function estate_sales()
        { 
            $this->load->view('header');
            $this->load->view('estate_sales');
            $this->load->view('footer2');
        }
        
        public function estate_services()
        { 
            $this->load->view('header');
            $this->load->view('estate_services');
            $this->load->view('footer2');
        }
        
        public function preservation()
        { 
            $this->load->view('header');
            $this->load->view('preservation');
            $this->load->view('footer2');
        }
        
        public function form1()
        { 
            $this->load->library('form_validation');
            
            $data['name'] = $this->input->post('name');
            $data['email'] = $this->input->post('email');
            $data['phone'] = $this->input->post('phone');
            $data['subject'] = $this->input->post('subject');
            
            $this->form_validation->set_rules('name', 'Name', 'trim');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('phone', 'Phone', 'trim');
            $this->form_validation->set_rules('subject', 'Subject', 'trim|required|xss_clean');
           

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
                
                $this->Newsletter->insert_more_info($data); 
                $to = $data['email'];
                $message = "Thank you for contacting with us. we will inform you about it within a short time.";
                mail($to,"Contact with Yellow Bird",$message);
                
                $this->session->set_userdata('success_msg', 'Thank you for your information, we will contact with you soon.');                
                $this->load->view('header');           
                $this->load->view('home',$data);
                $this->load->view('footer2');
            }
            
            
        }
        
        public function newsletter()
        { 
            $this->load->view('header');
            $this->load->view('newsletter');
            $this->load->view('footer2');
        }
        
        public function newsletter2()
        { 
            $this->load->library('form_validation');
            
            $data['email'] = $this->input->post('email');
            $data['first_name'] = $this->input->post('first_name');
            $data['last_name'] = $this->input->post('last_name');
            
            
            
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('first_name', 'First name', 'trim|xss_clean');
            $this->form_validation->set_rules('last_name', 'Last name', 'trim|xss_clean');
           

            if ($this->form_validation->run() == FALSE)
            {   
                //$this->session->set_userdata('error_msg', 'Thank you for your information, we will contact with you soon.'); 
                $this->load->view('header');           
                $this->load->view('newsletter', $data);
                $this->load->view('footer2');
            }
            else
            {   
                $this->load->model('Newsletter');
                
                $this->Newsletter->insert_email($data); 
                $to = $data['email'];
                $message = "Thank you for contacting with us. From now, you will get all the updates about Yellow Bird.";
                mail($to,"Contact with Yellow Bird",$message);
                
                $this->session->set_userdata('success_email_msg', 'Thank you for your subscription. From now, you will get every updates about Yellow Bird.');                
                
                $this->load->view('header');           
                $this->load->view('home',$data);
                $this->load->view('footer');
            }
            
            
        }
        
   
}

