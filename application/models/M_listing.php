<?php 
	
	class M_listing extends CI_Model{
		
		public function addProduct($data)
		{
			$this->db->insert('product_listing', $data);
		}
		
		public function getList($data)
		{
			$this->db->from('product_listing');
			if($data['product_type']!="all"){
				$this->db->where('product_type',$data['product_type']);
				if($data['steel_type']!="all"){
					$this->db->where('steel_type',$data['steel_type']);
					if($data['od']!=0){
						$this->db->where('od',$data['od']);
						if($data['weight']!=0){
							$this->db->where('weight',$data['weight']);
						}
					}
				}
			}
			return $this->db->get();

		}

		public function getByType($type)
		{
			$this->db->from('product_listing');
			$this->db->where('product_type',$type);
			return $this->db->get();
		}
		
		public function getProductType()
		{
			$this->db->select('id,name');
			return $this->db->get('product_types');
		}

		public function getOD()
		{
			$this->db->select('id_product_type,dm_od_label');
			return $this->db->get('dimensions');
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