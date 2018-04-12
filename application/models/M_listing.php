<?php 
	
	class M_listing extends CI_Model{
		
		public function add_product($data)
		{
			$this->db->insert('product_listing', $data);
		}
		
		public function get_by_type($type)
		{
			$this->db->from('product_listing');
			$this->db->where('product_type',$type);
			$query = $this->db->get();
			return $query->row();
		}
		
		public function update($where, $data)
		{
			$this->db->update('product_listing', $data, $where);
			return $this->db->affected_rows();
		}
		
		public function delete_listing($id)
		{
			$this->db->where('id', $id);
			$this->db->delete('product_listing');
		}	
	}																														
?>