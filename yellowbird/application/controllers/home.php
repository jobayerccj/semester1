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
            
            $this->load->helper('captcha');
            
           /* $vals = array(
                'word' => '',
                'img_path' => './captcha/',
                'img_url' => 'http://5.101.105.32/yb/captcha/',
                'font_path' => './path/to/fonts/texb.ttf',
                'img_width' => '150',
                'img_height' => 30,
                'expiration' => 7200
                );*/
            
           $vals = array(
                'word' => '',
                'img_path' => './captcha/',
                'img_url' => 'http://localhost/semester1/yellowbird/captcha/',
               'font_path' => './path/to/fonts/texb.ttf',
                'img_width' => '150',
               'img_height' => 30,
               'expiration' => 7200
                );

            $cap = create_captcha($vals);
            $data['cap'] = $cap;
           
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
        
        public function contact()
        { 
            $this->load->view('header');
            $this->load->view('contact');
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
                $this->load->view('footer');
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
                $this->load->view('footer');
            }
            
            
        }
        
        public function form2()
        { 
            $this->load->library('form_validation');
            
            $data2['name'] = $this->input->post('name');
            $data2['phone'] = $this->input->post('phone');
            $data2['email'] = $this->input->post('email');
            
            $data2['address'] = $this->input->post('address');
            $data2['city'] = $this->input->post('city');
            $data2['zip'] = $this->input->post('zip');
            
            $data2['as_soon_as'] = $this->input->post('as_soon_as');
            $data2['4_6_weeks'] = $this->input->post('4_6_weeks');
            $data2['6_12_weeks'] = $this->input->post('6_12_weeks');
            $data2['more_then_3'] = $this->input->post('more_then_3');
            
            $data2['full_home'] = $this->input->post('full_home');
            $data2['downsizing'] = $this->input->post('downsizing');
            $data2['moving'] = $this->input->post('moving');
            
            $data2['accessories'] = $this->input->post('accessories');
            $data2['art'] = $this->input->post('art');
            $data2['china'] = $this->input->post('china');           
            $data2['clothing'] = $this->input->post('clothing');
            $data2['crystal'] = $this->input->post('crystal');
            $data2['firearms'] = $this->input->post('firearms');
            
            $data2['furniture'] = $this->input->post('furniture');
            $data2['garage_sales'] = $this->input->post('garage_sales');
            $data2['gold'] = $this->input->post('gold');
            
            $data2['jewelery'] = $this->input->post('jewelery');
            $data2['kitchen'] = $this->input->post('kitchen');
            $data2['outdoor'] = $this->input->post('outdoor');
            $data2['rugs'] = $this->input->post('rugs');
            $data2['sporting'] = $this->input->post('sporting');
            $data2['tools'] = $this->input->post('tools');
            $data2['vehicles'] = $this->input->post('vehicles');
            
            $data3['captcha1'] = $this->input->post('captcha1');
            $data3['captcha2'] = $this->input->post('captcha2');
            
            //$data2['captcha1'] = $this->input->post('captcha1');
            
            $this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');
            $this->form_validation->set_rules('phone', 'Phone', 'trim|xss_clean');
            
            $this->form_validation->set_rules('address', 'Address', 'trim|xss_clean');
            $this->form_validation->set_rules('city', 'City', 'trim|xss_clean');
            $this->form_validation->set_rules('zip', 'ZIP', 'trim|xss_clean');

            if ($this->form_validation->run() == FALSE || $data3['captcha1'] != $data3['captcha2'])
            {   
                //$this->session->set_userdata('error_msg', 'Thank you for your information, we will contact with you soon.'); 
                
                /*$this->load->view('header');           
                $this->load->view('about');
                $this->load->view('footer2');*/
                $data2['pop_error'] = "Sorry, you have problem with your data, please re enter it.";
                $this->session->set_userdata('new_data',$data2);
                
                redirect('home/about');
            }
            
            
            else
            {   
                $this->load->model('Newsletter');
                
                $this->Newsletter->insert_click_here($data2); 
                $to = $data2['email'];
                $message = "Thank you for contacting with us. we will inform you about it within a short time.";
                mail($to,"Contact with Yellow Bird",$message);
                
                $this->session->sess_destroy(); 
                
                $this->session->set_userdata('success_msg', 'Thank you for your information, we will contact with you soon.');                
                $this->load->view('header');           
                $this->load->view('home',$data2);
                $this->load->view('footer');
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

