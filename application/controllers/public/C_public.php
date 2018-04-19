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
			$this->template->load('template/template','public/public_search');
		}
		
		public function result()
		{
			$this->template->load('template/template','public/public_result');
		}
		public function home(){
			$this->template->load('template/template','public/public_index');
		}
	}		