<?php 
	
	class M_admin extends CI_Model{
		
		function input_data($table,$data){
			$this->db->insert($data,$table);
		}	
		
		function delete($id){
			$this->db->where('id', $id);
			$this->db->delete('register_user');
		}
		
		function edit_data($where,$table){		
			$this->db->get_where($table,$where);
		}
		
		function update_data($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}
		
		function changeActiveState($key)
		{
			$this->load->database();
			$data = array(
			'active' => 1
			);
			
			$this->db->where('contact_no', $key);
			$this->db->update('register_user', $data);
			
			return true;
		}
	}							