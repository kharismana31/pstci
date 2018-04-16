<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Registered extends MY_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('M_admin');
			//memanggil function dari MY_Controller
			$this->cekLogin();
			//validasi jika session dengan level karyawan mengakses halaman ini maka akan dialihkan ke halaman karyawan
			if ($this->session->userdata('access') == "m") {
				redirect('member/C_member');
			}
		}
		
		public function index(){
			$this->template->load('template/template','admin/admin_list_user');
		}
		
		public function delete_check(){
			$data = $this->input->post('id');
            foreach ($data as $id) {
				$this->db->where('id', $id);
				$this->db->delete('users');
			}
		}
		
		public function table_list(){
			$this->datatables->select('id,fname,surename,company,business_type,country,country_code,phone_number,email');
			$this->datatables->where('access','m');
			
			$this->datatables->add_column('id', "<div class='checkbox'><input type='checkbox' class='checkbox' value='$1' id='$1'><label for='$1'></label></div>",'id');
			$this->datatables->add_column('fname', "<p>$1</p>", 'fname');
			$this->datatables->add_column('surename', "<p>$1</p>", 'surename');
			$this->datatables->add_column('company', "<p>$1</p>", 'company');
			$this->datatables->add_column('business_type', "<p>$1</p>", 'business_type');
			$this->datatables->add_column('country', "<p>$1</p>", 'country');
			$this->datatables->add_column('country_code', "<p>$1</p>", 'country_code');
			$this->datatables->add_column('phone_number', "<p>$1</p>", 'phone_number');
			$this->datatables->add_column('email', "<p>$1</p>", 'email');
			
			$this->datatables->from('users');
			return print_r($this->datatables->generate());
		}
		
	} 
