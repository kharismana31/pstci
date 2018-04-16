<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class C_member extends MY_Controller{
		
		public function __construct(){
			parent::__construct();
			
			//memanggil function dari controller MY_Controller
			$this->cekLogin();
			
			//validasi jika session dengan level manager mengakses halaman ini maka akan dialihkan ke halaman manager
			if ($this->session->userdata('access') == "a") {
				redirect('admin/Admin');
			}
		}
		
		public function index()
		{
			
			$this->template->load('template/template','member/user');
		}
	}
?>