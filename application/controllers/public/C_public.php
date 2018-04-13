<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class C_public extends MY_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model("M_listing");
		}
		
		public function index()
		{
			$this->template->load('template/template','public/public_compare');
		}
		
		public function search()
		{
			$this->template->load('template/template','public/public_search');
		}
		
		public function result_search()
		{
			$data['list_result']=$this->M_listing->getAll()->result_array();

			$this->template->load('template/template','public/public_result',$data);
		}

		public function home(){
			$this->template->load('template/template','public/public_index');
		}

		public function result_advance()
		{	
			$type=$this->uri->segment(4);
			//print_r($type);
			//die();
			$data["list_result"]=$this->M_listing->get_by_type($type)->result_array();
			//print_r($data);
			//die();
			$this->template->load('template/template','public/public_result',$data);
		}
	}		