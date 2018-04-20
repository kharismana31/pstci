<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class C_public extends MY_Controller
	{
		public function __construct()
		{
			parent::__construct();
		}
		
		public function index()
		{
			$this->template->load('template/template','public/public_compare');
		}
		
		public function search()
		{
            $this->load->model('m_listing');
            $data['product_types'] = M_product_type::get();
            $data['mainmills'] = M_manufacturer::get();
            $data['script_captcha'] = "<script src=\"".base_url('assets/pages/js/custom-search.js')."\"  type=\"text/javascript\"></script>";
            $this->template->load('template/template','public/public_search', $data);
		}
		
		public function result()
		{
			$this->template->load('template/template','public/public_result');
		}
		public function home(){
			$this->template->load('template/template','public/public_index');
		}
	}		