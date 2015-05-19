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
    
    function insert_member($data){ 
        
        $new_data['name'] = $data['name'];
        $new_data['email'] = $data['email'];
        $new_data['phone'] = $data['phone'];
        $new_data['image'] = $data['image'];
        
        $this->db->insert('member', $new_data);
    }
    
    function all_member(){ 
        $this->db->select('*');
        $this->db->from('member');
        
        $query = $this->db->get();        
        return $query->result();       
    }
    
    function delete_member($id){
        $this->db->where('id', $id);
        $this->db->delete('member'); 
    }
    
    function more_info_details(){ 
        $this->db->select('*');
        $this->db->from('more_info');
        
        $query = $this->db->get();        
        return $query->result();       
    }
    
    function email_list(){ 
        $this->db->select('*');
        $this->db->from('newsletter');
        
        $query = $this->db->get();        
        return $query->result();       
    }
    
    function click_here(){ 
        $this->db->select('*');
        $this->db->from('click_here');
        
        $query = $this->db->get();        
        return $query->result();       
    }
 
}