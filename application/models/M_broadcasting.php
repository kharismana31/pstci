<?php 
	class M_broadcasting extends CI_Model{
		
		function ambil(){
			$this->db->where('access','m');
			return $this->db->get('users');
		}
		
		public function get_id($id)
		{
			$this->db->from('message');
			$this->db->where('id_message',$id);
			$query = $this->db->get();
			return $query->row();
		}
		
		function show_user(){
			$this->db->where('access','a');
			return $this->db->get('users');
		}
		
	}																	