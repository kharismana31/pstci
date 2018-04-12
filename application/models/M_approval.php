<?php 
	class M_approval extends CI_Model{
		
		public function update_product($id)
		{
			$this->db->where('id', $id);
			$this->db->update('product_listing', array('appro_a' => "1"));
			return $this->db->affected_rows();
		}
		
		public function delete_product($id)
		{
			$this->db->where('id', $id);
			$this->db->delete('product_listing');
		}
		
	}												