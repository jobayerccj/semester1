<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
    
        function __construct() {
            parent::__construct();
            $this->load->helper('captcha');
            $this->load->library('form_validation');
        }

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
               'font_path' => './fonts/Lato-Black.ttf',
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
            //$data['page'] = "estate_services";
           
            $this->load->view('header');
            $this->load->view('estate_sales', $data);
            $this->load->view('footer2');
            
            
        }
        
        public function estate_services()
        {   
            
            
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
            $data['page'] = "estate_services";
           
            $this->load->view('header');
            $this->load->view('estate_services', $data);
            $this->load->view('footer2');
            
            
        }
        
        public function preservation()
        {   
           
            
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
            $this->load->view('preservation', $data);
            $this->load->view('footer2'); 
           
        }
        
        public function contact()
        {   
            
            
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
            $this->load->view('contact', $data);
            $this->load->view('footer2'); 
                        
        }
        
        public function form1()
        { 
                        
            $data['name'] = $this->input->post('name');
            $data['email'] = $this->input->post('email');
            $data['phone'] = $this->input->post('phone');
            $data['subject'] = $this->input->post('subject');
            
            $email = $this->input->post('email');
            
            $this->form_validation->set_rules('name', 'Name', 'trim');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|callback_check_duplicate_email2[' . $email . ']');
            $this->form_validation->set_rules('phone', 'Phone', 'trim');
            $this->form_validation->set_rules('subject', 'Subject', 'trim|required|xss_clean');
           
            $this->form_validation->set_message('check_duplicate_email2', 'This email is already exist. Please write a new email.');

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
                
                $from = $data['email'];
               
                //$email1 = $data['email'];
                
                //$message = "Thank you for contacting with us. we will inform you about it within a short time.";
                $name = $data['name'];
                $phone = $data['phone'];
                $subject = $data['subject'];
                
                $message = $data['subject']. "<br/>Name: ". $name. "<br/>Phone: ".$phone;
               
/*                $config = Array(		
                     'protocol' => 'smtp',
                     'smtp_host' => '5.101.105.32',
                     'smtp_port' => 25,
                     'smtp_user' => 'yb',
                     'smtp_pass' => 'qqq111',
                     'smtp_timeout' => '4',
                     'mailtype'  => 'html', 
                     'charset'   => 'iso-8859-1'
                 );
 
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
                
                $this->email->from($from);
                $this->email->to("jobayercse@gmail.com");
                $this->email->cc("jobayer@unitechbd.com");
                $this->email->reply_to($from); 

                $this->email->subject("Contact with YelloBird");
                $this->email->message($subject); 

                $this->email->send();*/
                
                $to = "mwayellowbird@gmail.com". ', ';
                $to = "mgayellowbird@hotmail.com";
                
                
                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                
                //mail($to,$subject, $message,$headers);
                              
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
                
                $this->session->set_userdata('first_form',$data);
                
                $this->session->set_userdata('success_msg', 'Thank you for your information, we will contact soon.');                
                $this->load->view('header');           
                $this->load->view('form1_1',$data);
                $this->load->view('footer');
            }
                        
        }
        
        public function form2()
        { 
           
            $data2['name'] = $this->input->post('name');
            $data2['phone'] = $this->input->post('phone');
            $data2['email'] = $this->input->post('email');
            
            $data2['address'] = $this->input->post('address');
            $data2['city'] = $this->input->post('city');
            $data2['zip'] = $this->input->post('zip');
            
            $data2['as_soon_as'] = $this->input->post('as_soon_as');
            $data2['_4_6_weeks'] = $this->input->post('4_6_weeks');
            $data2['_6_12_weeks'] = $this->input->post('6_12_weeks');
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
            
            $data2['tools'] = $this->input->post('tools');
            $data2['vehicles'] = $this->input->post('vehicles');
            
            $data2['real_estate_agent'] = $this->input->post('agent');
            $data2['recommendation'] = $this->input->post('realtor');
            
            $data3['captcha1'] = $this->input->post('captcha1');
            $data3['captcha2'] = $this->input->post('captcha2');
            
            $page = $this->input->post('page');
            
            $email = $this->input->post('email');
            
            //$data2['captcha1'] = $this->input->post('captcha1');
            
            $this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_cleanxss_clean|callback_check_duplicate_email[' . $email . ']');
            $this->form_validation->set_rules('phone', 'Phone', 'trim|xss_clean');
              
            $this->form_validation->set_rules('address', 'Address', 'trim|xss_clean');
            $this->form_validation->set_rules('city', 'City', 'trim|xss_clean');
            $this->form_validation->set_rules('zip', 'ZIP', 'trim|xss_clean');
            
            $this->form_validation->set_message('check_duplicate_email', 'This email is already exist. Please write a new email.');
            
            if ($this->form_validation->run() == FALSE || strtoupper($data3['captcha1'])  != strtoupper($data3['captcha2']))
            {   
                //$this->session->set_userdata('error_msg', 'Thank you for your information, we will contact with you soon.'); 
                
                /*$this->load->view('header');           
                $this->load->view('about');
                $this->load->view('footer2');*/
                $data2['pop_error'] = "Sorry, you have problem with your data, please re enter it.";
                $this->session->set_userdata('new_data',$data2);
                
                if($page == 'estate_services')
                {
                   redirect('home/estate_services'); 
                }
                else if($page == 'estate_sales')
                {
                   redirect('home/estate_sales'); 
                }
                else if($page == 'preservation')
                {
                   redirect('home/preservation'); 
                }
                else if($page == 'contact')
                {
                   redirect('home/contact'); 
                }
                
                else if($page == 'form1')
                {
                   redirect('home/form1_1'); 
                }
                else{
                    redirect('home/about'); 
                }
                
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
        
        public function check_duplicate_email($post_email) {
            
            $this->load->model('Newsletter');
            return $this->Newsletter->checkDuplicateEmail($post_email);

        }
        
        public function check_duplicate_email2($post_email) {
            $this->load->model('Newsletter');
            return $this->Newsletter->checkDuplicateEmail2($post_email);
        }
        
        public function check_duplicate_email3($post_email) {
            $this->load->model('Newsletter');
            return $this->Newsletter->checkDuplicateEmail3($post_email);
        }
        
        public function newsletter()
        { 
            $this->load->view('header');
            $this->load->view('newsletter');
            $this->load->view('footer2');
        }
        
        public function newsletter2()
        { 
           
            $data['email'] = $this->input->post('email');
            $data['first_name'] = $this->input->post('first_name');
            $data['last_name'] = $this->input->post('last_name');
            
            $email = $this->input->post('email');
            
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|callback_check_duplicate_email3[' . $email . ']');
            $this->form_validation->set_rules('first_name', 'First name', 'trim|xss_clean');
            $this->form_validation->set_rules('last_name', 'Last name', 'trim|xss_clean');
           
            $this->form_validation->set_message('check_duplicate_email', 'This email is already exist. Please write a new email.');

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
        
        public function form1_1()
        {   
           $data['name'] = $this->input->post('name');
           $data['email'] = $this->input->post('email');
           $data['phone'] = $this->input->post('phone');
            
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
            //$data['page'] = "estate_services";
           
            $this->load->view('header');
            $this->load->view('form1_1', $data);
            $this->load->view('footer2');
           
        }
        
        public function sitemap()
	{       
            $this->load->view('header');
            $this->load->view('sitemap');
            $this->load->view('footer');
	}
        
   
}

