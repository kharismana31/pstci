<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class C_admin extends MY_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('M_admin');
			//memanggil function dari MY_Controller
			$this->cekLogin();
			//validasi jika session dengan level karyawan mengakses halaman ini maka akan dialihkan ke halaman karyawan
			if ($this->session->userdata('access') == "m") {
				redirect('member/C_member');
			}
		}
		
		public function index()
		{
			$this->template->load('template/template','admin/admin');
		}
		
		
		function delete(){
			// $this->load->model('M_admin');
			// $id = $this->input->post('check');
			// foreach ($id as $i){
			// // foreach($_POST['id'] as $id){
			// $this->M_admin->deletebyid($i);
			// 	$this->M_admin->delete_user($where,'user');
			
			
			
			
		}
	}
