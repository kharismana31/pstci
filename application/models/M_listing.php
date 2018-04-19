<?php 
	
	class M_listing extends CI_Model{
		
		public function add_product($data)
		{
			$this->db->insert('product_listing', $data);
		}
		
		public function get_by_id($id)
		{
			$this->db->from('product_listing');
			$this->db->where('id',$id);
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

        public function active_record()
        {
            return $this->db->query("SELECT COUNT(*) AS total FROM product_listing WHERE appro_a = '0'")->row()->total;
		}

        public function manufacturers()
        {
            return $this->db->query("SELECT manufact_name FROM product_listing GROUP BY manufact_name")->result();
		}
		
	}																																			