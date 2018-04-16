<?php 
	class Approval extends MY_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('m_approval');
			//memanggil function dari MY_Controller
			$this->cekLogin();
			//validasi jika session dengan level karyawan mengakses halaman ini maka akan dialihkan ke halaman karyawan
			if ($this->session->userdata('access') == "m") {
				redirect('member/C_member');
			}
		}
		
		public function index(){
			$this->template->load('template/template',('admin/admin_approval'));
		}
		
		public function table_list(){	
			$this->datatables->select('id,connect_owner,product_type,od,weight,grade_type,connect_stand,range_gen,spcl_condition,manufact_name,country,state');
			$this->datatables->where('appro_a','0');
			
			$this->datatables->add_column('id', "<div class='checkbox'><input type='checkbox' class='checkbox' value='$1' id='$1'><label for='$1'></label></div>",'id');
			$this->datatables->add_column('connect_owner', "<p>$1</p>", 'connect_owner');
			$this->datatables->add_column('product_type', "<p>$1</p>", 'product_type');
			$this->datatables->add_column('od', "<p>$1</p>", 'od');
			$this->datatables->add_column('weight', "<p>$1</p>", 'weight');
			$this->datatables->add_column('grade_type', "<p>$1</p>", 'grade_type');
			$this->datatables->add_column('connect_stand', "<p>$1</p>", 'connect_stand');
			$this->datatables->add_column('range_gen', "<p>$1</p>", 'range_gen');
			$this->datatables->add_column('spcl_condition', "<p>$1</p>", 'spcl_condition');
			$this->datatables->add_column('manufact_name', "<p>$1</p>", 'manufact_name');
			$this->datatables->add_column('country', "<p>$1</p>", 'country');
			$this->datatables->add_column('state', "<p>$1</p>", 'state');
			
			$this->datatables->from('product_listing');
			return print_r($this->datatables->generate());
		}
		
		public function reject_product()
		{
			$data = $this->input->post('id');
			foreach ($data as $id) {
				$this->m_approval->delete_product($id);
			}
		}
		
		public function approve_product()
		{
			$data = $this->input->post('id');
			foreach ($data as $id) {
				$this->m_approval->update_product($id);
			}
		}
		
	}																				