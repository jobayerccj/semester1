<?php

class Newsletter extends CI_Model {
    
     function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function insert_more_info($data){   
        $this->db->insert('more_info', $data);
    }
    
    function insert_click_here($data){   
        $this->db->insert('click_here', $data);
    }
    
    function insert_email($data){   
        $this->db->insert('newsletter', $data);
    }
    
    public function checkDuplicateEmail($email) {

        $this->db->where('email', $email);

        $query = $this->db->get('click_here');

        $count_row = $query->num_rows();

        if ($count_row > 0) {
          return FALSE; 
         } else {         
            return TRUE; 
         }
    }
    
    public function checkDuplicateEmail2($email) {

        $this->db->where('email', $email);

        $query = $this->db->get('more_info');

        $count_row = $query->num_rows();

        if ($count_row > 0) {
          return FALSE; 
         } else {         
            return TRUE; 
         }
    }
    
    public function checkDuplicateEmail3($email) {

        $this->db->where('email', $email);

        $query = $this->db->get('newsletter');

        $count_row = $query->num_rows();

        if ($count_row > 0) {
          return FALSE; 
         } else {         
            return TRUE; 
         }
    }
    
    
}