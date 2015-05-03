<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{       
            $this->load->view('header');
            $this->load->view('home');
            $this->load->view('footer');
	}
        
        public function about()
        { 
            $this->load->view('header');
            $this->load->view('about');
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
        
        
       
}

