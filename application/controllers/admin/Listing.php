<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Listing extends MY_Controller
	{
		public function __construct()
		{
			parent::__construct();
            $this->load->model('m_listing');
            $this->load->model('m_product_type');
			//memanggil function dari MY_Controller
			$this->cekLogin();
			//validasi jika session dengan level karyawan mengakses halaman ini maka akan dialihkan ke halaman karyawan
			if ($this->session->userdata('access') == "m") {
				redirect('member/C_member');
			}
		}
		
		public function index()
		{
		    $this->load->model('m_listing');
		    $data['product_types'] = M_product_type::get();
		    $data['mainmills'] = M_manufacturer::get();
			$this->template->load('template/template','admin/admin_entry_product', $data);
		}
		
		public function add_product()
		{	
			$data = array(
			'product_type'          => $this->input->post('product'),
			'od'                    => $this->input->post('od'),
			'weight'                => $this->input->post('weight'),
			'range_gen'             => ($this->input->post('range_manual') != "") ? $this->input->post('range_manual') : $this->input->post('range'),
			'spcl_condition'        => $this->input->post('special'),
			'yield'                 => $this->input->post('yield'),
			'steel_type'            => $this->input->post('optionsteel'),
			'grade_type'            => $this->input->post('optiongrade'),
			'api_pro_1'             => ($this->input->post('api1_manual') != "") ? $this->input->post('api1_manual') : $this->input->post('api1'),
			'sour_class'            => $this->input->post('gradesour'),
			// 'speciality'            => $this->input->post('speciality'),
			'speciality'            => implode(",", $this->input->post('speciality')),
			'chrome_content'        => $this->input->post('gradechrome'),
			'connect_stand'         => $this->input->post('optionconnection'),
			'api_pro_2'             => ($this->input->post('api2_manual') != "") ? $this->input->post('api2_manual') : $this->input->post('api2'),
			'api_pro_3'             => $this->input->post('api3'),
//			'connect_owner'         => $this->session->userdata('fname'),
			'connect_owner'         => $this->input->post('connect_owner'),
			'country'               => $this->input->post('country'),
			'location'              => $this->input->post('location'),
			'post_code'             => $this->input->post('post'),
			'state'                 => $this->input->post('state'),
			'street_address'        => $this->input->post('street'),
			'manufact_name'         => ($this->input->post('other') != "") ? $this->input->post('other') : $this->input->post('manufact_name'),
			'other'                 => $this->input->post('other'),
			'manufact_country'      => $this->input->post('manufact_country'),
			'y_manufact'            => $this->input->post('manufact_year'),
			'price'                 => $this->input->post('price'),
			'quantity'              => $this->input->post('quantity'),
			'appro_a'               => "1",
			'name'                  => $this->session->userdata('fname')
			);

            if(!empty($_FILES['material']['name'])){
                $data['material_c'] = $this->doupload('material');
            } else { $data['material_c'] = ""; }
            if(!empty($_FILES['report']['name'])){
                $data['inspect_r'] = $this->doupload('report');
            } else { $data['inspect_r'] = ""; }
            if(!empty($_FILES['photos']['name'])){
                $data['photos'] = $this->doupload('photos');
            } else { $data['photos'] = ""; }
			
			$insert = $this->m_listing->add_product($data);
			redirect('admin/View_listing');
		}

        public function edit($id)
        {
            $this->load->model('m_listing');
            $data['product_types'] = M_product_type::get();
            $data['mainmills'] = M_manufacturer::get();
            $data['listing'] = $this->m_listing->get_by_id($id);
            $this->template->load('template/template','admin/admin_edit_listing', $data);
		}

        public function update($id)
        {
            $data = array(
                'product_type'          => $this->input->post('product'),
                'od'                    => $this->input->post('od'),
                'weight'                => $this->input->post('weight'),
                'range_gen'             => ($this->input->post('range_manual') != "") ? $this->input->post('range_manual') : $this->input->post('range'),
                'spcl_condition'        => $this->input->post('special'),
                'yield'                 => $this->input->post('yield'),
                'steel_type'            => $this->input->post('optionsteel'),
                'grade_type'            => $this->input->post('optiongrade'),
                'api_pro_1'             => ($this->input->post('api1_manual') != "") ? $this->input->post('api1_manual') : $this->input->post('api1'),
                'sour_class'            => $this->input->post('gradesour'),
                // 'speciality'            => $this->input->post('speciality'),
                'speciality'            => implode(",", $this->input->post('speciality')),
                'chrome_content'        => $this->input->post('gradechrome'),
                'connect_stand'         => $this->input->post('optionconnection'),
                'api_pro_2'             => ($this->input->post('api2_manual') != "") ? $this->input->post('api2_manual') : $this->input->post('api2'),
                'api_pro_3'             => $this->input->post('api3'),
//			'connect_owner'         => $this->session->userdata('fname'),
                'connect_owner'         => $this->input->post('connect_owner'),
                'country'               => $this->input->post('country'),
                'location'              => $this->input->post('location'),
                'post_code'             => $this->input->post('post'),
                'state'                 => $this->input->post('state'),
                'street_address'        => $this->input->post('street'),
                'manufact_name'         => ($this->input->post('other') != "") ? $this->input->post('other') : $this->input->post('manufact_name'),
                'other'                 => $this->input->post('other'),
                'manufact_country'      => $this->input->post('manufact_country'),
                'y_manufact'            => $this->input->post('manufact_year'),
                'price'                 => $this->input->post('price'),
                'quantity'              => $this->input->post('quantity'),
                'appro_a'               => "1",
                'name'                  => $this->session->userdata('fname')
            );

            $listing = $this->m_listing->get_by_id($id);

            if (!empty($_FILES['material']['name'])) {
                $data['material_c'] = $this->doupload('material');
                unlink('uploads/listings/'.$listing->material_c);
            }
            if (!empty($_FILES['report']['name'])) {
                $data['inspect_r'] = $this->doupload('report');
                unlink('uploads/listings/'.$listing->inspect_r);
            }
            if (!empty($_FILES['photos']['name'])) {
                $data['photos'] = $this->doupload('photos');
                unlink('uploads/listings/'.$listing->photos);
            }

            $insert = $this->m_listing->update("id = {$id}", $data);
            redirect('admin/View_listing');
		}

        private function doupload($input)
        {
            $upload_path='uploads/listings/';
            if(!file_exists($upload_path))
            {
                mkdir($upload_path, 0777, true);
            }
            $config = array(
                'upload_path' => $upload_path,
                'allowed_types' => "gif|jpg|png|jpeg|pdf",
                'overwrite' => TRUE,
                'max_size' => "2048000",
                'encrypt_name' => TRUE
            );
            $this->load->library('upload', $config);
            if(!$this->upload->do_upload($input)) {
                return $this->upload->display_errors();
            }
            else {
                $imageDetailArray = $this->upload->data();
                return $imageDetailArray['file_name'];
            }
    
         }
}