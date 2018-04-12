<?php defined('BASEPATH')OR exit('No direct script access allowed'); 

	class C_listing_analysis extends MY_Controller
	{
		function __construct()
		{
			parent::__construct();
		
			$this->cekLogin();
			
			//validasi jika session dengan level manager mengakses halaman ini maka akan dialihkan ke halaman manager
			if ($this->session->userdata('access') == "a") {
				redirect('admin/C_admin');
			}

		}

		public function index()
		{
			$this->template->load('template/template', 'member/user_listing_analysis');
		}
		

	}	