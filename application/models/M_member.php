<?php 
	
	class M_member extends CI_Model{

	function ambil(){
		$this->db->where('access','a');
		return $this->db->get('users');
	}
		
	
	function create_message(){
		
		}
	function inbox($where){
		$this->db->where('member_id',$where);
		return $this->db->get('message');
	}

	function add($data_listing){
		$this->db->insert('product_listing',$data_listing);
	}

        
        
    function show_msg(){
        
        $user = $this->session->userdata('id');
        $this->db->order_by('date', 'DESC');
        $this->db->where('member_id =',$user);
        return $this->db->get('message');    
    }
    
    function show_user(){
        $this->db->where('access','a');
        return $this->db->get('users');
    }    
        
        
	}