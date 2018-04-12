<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class C_listing extends MY_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('m_listing');
			//memanggil function dari MY_Controller
			$this->cekLogin();
			//validasi jika session dengan level karyawan mengakses halaman ini maka akan dialihkan ke halaman karyawan
			if ($this->session->userdata('access') == "m") {
				redirect('member/C_member');
			}
		}
		
		public function index()
		{
			$this->template->load('template/template','admin/admin_entry_product');
		}
		
		public function add_product()
		{	
			$data = array(
			'product_type'          => $this->input->post('product'),
			'od'                    => $this->input->post('od'),
			'weight'                => $this->input->post('weight'),
			'range_gen'             => $this->input->post('range'),
			'spcl_condition'        => $this->input->post('special'),
			'yield'                 => $this->input->post('yield'),
			'steel_type'            => $this->input->post('optionsteel'),
			'grade_type'            => $this->input->post('optiongrade'),
			'api_pro_1'             => $this->input->post('api1'),
			'sour_class'            => $this->input->post('gradesour'),
			// 'speciality'            => $this->input->post('speciality'),
			'speciality'            => implode(",", $this->input->post('speciality')),
			'chrome_content'        => $this->input->post('gradechrome'),
			'connect_stand'         => $this->input->post('optionconnection'),
			'api_pro_2'             => $this->input->post('api2'),
			'api_pro_3'             => $this->input->post('api3'),
			'connect_owner'         => $this->session->userdata('fname'),
			'country'               => $this->input->post('country'),
			'location'              => $this->input->post('location'),
			'post_code'             => $this->input->post('post'),
			'state'                 => $this->input->post('state'),
			'street_address'        => $this->input->post('street'),
			'manufact_name'         => $this->input->post('manufact_name'),
			'other'                 => $this->input->post('other'),
			'manufact_country'      => $this->input->post('manufact_country'),
			'y_manufact'            => $this->input->post('manufact_year'),
			'price'                 => $this->input->post('price'),
			'quantity'              => $this->input->post('quantity'),
			'material_c '           => $this->input->post('material'),
			'inspect_r '            => $this->input->post('report'),
			'photos'                => $this->input->post('photos'),
			'appro_a'               => "1",
			'name'                  => $this->session->userdata('fname')
			);
			
			$insert = $this->m_listing->add_product($data);
			redirect('admin/C_view_listing_product');
		}
	}
