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
		
		public function home(){
			$this->template->load('template/template','public/public_index');
		}

		public function search()
		{
			$data['list_product'] = $this->M_listing->get
			$this->template->load('template/template','public/public_search');
		}
		
		public function result_search()
		{
			$input = array('product_type' => $this->input->get('product'), 
							'steel_type' => $this->input->get('steeltype'),
							'measure' => $this->input->get('uom'),
							'od' => $this->input->get('od'),
							'weight' => $this->input->get('weight'));
			//print_r($input);
			//die();
			$data['list_result']=$this->M_listing->getList($input)->result_array();
			//print_r($data);
			$this->template->load('template/template','public/public_result',$data);
		}

		public function result_advance()
		{	
			$type=$this->uri->segment(4);
			$data["list_result"]=$this->M_listing->getByType($type)->result_array();
			$this->template->load('template/template','public/public_result',$data);
		}
	}		