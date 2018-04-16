<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Inbox extends MY_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('M_broadcasting');
			$this->load->helper(array('custom_value','date'));
			$this->cekLogin();
			
			if ($this->session->userdata('access') == "a") {
				redirect('admin/Admin');
			}
		}
		
		public function index(){
			$this->template->load('template/template', 'member/user_view_inbox');
		}
		
		public function get_id_messages($id)
		{
			$data = $this->M_broadcasting->get_id($id);
			echo json_encode($data);
		}
		
		public function delete_check(){
			$data = $this->input->post('id_message');
            foreach ($data as $id) {
				$this->db->where('id_message', $id);
				$this->db->delete('message');
			}
		}
		
		public function table_list(){
			$this->datatables->select('id_message,subject,text,status,date,from');
			$this->datatables->where('kirim','1','or','kirim','3','or','kirim','5');
			
			$this->datatables->add_column('id', "<div class='checkbox'><input type='checkbox' class='checkbox' value='$1' id='$1'><label for='$1'></label></div>",'id_message');
			$this->datatables->add_column('subject', "<p>$1</p>", 'subject');
			$this->datatables->add_column('from', "<p>$1</p>", 'from');
			$this->datatables->add_column('status', "<p>$1</p>", 'custom_status_inbox(status)');
			$this->datatables->add_column('date', "<p>$1</p>", 'date');
			$this->datatables->add_column('view', "<p><a class='btn btn-info' href='javascript:void(0)' onclick='view_messages($1)'><span class='fa fa-eye'></span></a></p>", 'id_message');
			
			$this->datatables->from('message');
			return print_r ($this->datatables->generate());
		}
	}
