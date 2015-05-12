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
    
    
}