<?php defined('BASEPATH')OR exit ('No direct script access allowed') 

		
		class C_manage extends MY_Controller
		{
			
			function __construct()
			{
				parent::__construct()


				$this->cekLogin();

				if ($this->session->userdata('access') == "a") {
				redirect('admin/Admin');
			}

		}

		public function index(){
			$this->template->load('template/template', 'member/');
		}	
	}

?>