<?php

class Newsletter extends CI_Model {
    
     function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function insert($data){   
        $this->db->insert('more_info', $data);
    }
}