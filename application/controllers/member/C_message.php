<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	class C_message extends MY_Controller{
		
		public function __construct(){
			parent::__construct();
			$this->load->model('M_broadcasting');
			$this->load->helper(array('custom_value','date'));
			$this->cekLogin();
			
			if ($this->session->userdata('access') == "a") {
				redirect('admin/Admin');
			}
		}
		
		public function index(){
			$this->template->load('template/template','member/user_view_message');
		}
		
		public function create(){
			$data['users']= $this->M_broadcasting->show_user()->result();
			$this->template->load('template/template','member/user_create_message',$data);
			
		}
		
        public function create_message(){
			$data      = $this->input->post('name');
			$subject   = $this->input->post('subject');
			$message   = $this->input->post('text');
			
			foreach($data as $d){
				$data = array(
				'subject'     => $subject,
				'text'        => $message,
				'access'      => $this->session->userdata('access'),
				'status'      => $this->session->userdata('access'),
				'from'        => $this->session->userdata('fname'),
				'date'        => longdate_indo(date('Y-m-d')).date(" h:m:s"),
				'kirim'       => '2',
				'name'        => $d 
				);
				
				$this->db->insert('message',$data);
			}
			
			redirect('member/C_message');
		}
		
		public function delete_check(){
			$data = $this->input->post('id_message');
			foreach ($data as $id) {
				$this->db->where('id_message', $id);
				$this->db->delete('message');
			}
		}
		
		public function get_id_messages($id)
		{
			$data = $this->M_broadcasting->get_id($id);
			echo json_encode($data);
		}
		
		public function member_number()
		{
			$data = $this->db->query('select * from message where kirim = 3 or kirim = 1 or kirim = 5')->num_rows();
			echo $data;
		}
		
		public function table_list(){
			$this->datatables->select('id_message,subject,text,status,date,name');
			$this->db->where('access','m');
			$this->db->where('kirim = "5" OR kirim = "2"');
			
			$this->datatables->add_column('id', "<div class='checkbox'><input type='checkbox' class='checkbox' value='$1' id='$1'><label for='$1'></label></div>",'id_message');
			$this->datatables->add_column('subject', "<p>$1</p>", 'subject');
			$this->datatables->add_column('text', "<p>$1</p>", 'text');
			$this->datatables->add_column('status', "<p>$1</p>", 'custom_status_broadcasting(status)');
			$this->datatables->add_column('to', "<p>$1</p>", 'name');
			$this->datatables->add_column('date', "<p>$1</p>", 'date');
			$this->datatables->add_column('view', "<p><a class='btn btn-info' href='javascript:void(0)' onclick='view_messages($1)'><span class='fa fa-eye'></span></a></p>", 'id_message');
			$this->datatables->from('message');
			return print_r ($this->datatables->generate());
		}
		
	}																			