<?php

class Admin_db extends CI_Model {
    
     function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function login($data){ 
        
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username',$data['username']);
        $this->db->where('password',$data['password']);
        $query_result = $this->db->get();
        $result = $query_result->row();
        
        return count($result);
    }
    
    function insert($data){   
        $this->db->insert('more_info', $data);
    }
    
    
}