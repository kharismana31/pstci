<?php defined('BASEPATH')OR exit('No direct script access allowed'); 

	class Listing extends MY_Controller
	{
		function __construct()
		{
			parent::__construct();
		    $this->load->model('m_listing');
			$this->cekLogin();
			
			//validasi jika session dengan level manager mengakses halaman ini maka akan dialihkan ke halaman manager
			if ($this->session->userdata('access') == "a") {
				redirect('admin/Admin');
			}
		}            
           public function index(){
                $this->load->library('form_validation');
                $this->form_validation->set_rules('type_item', 'PRODUCT TYPE', 'required');
                $this->form_validation->set_rules('od_item', 'OD', 'required|numeric');
                $this->form_validation->set_rules('weight_item', 'WEIGHT', 'required|numeric');
                $this->form_validation->set_rules('rage', 'RANGE', 'required');
                $this->form_validation->set_rules('special_condition', 'SPECIAL CONDITION', 'required');
                $this->form_validation->set_rules('yield_strengt', 'YIELD STRENGT', 'required');
                $this->form_validation->set_rules('steel_type', 'STELL TYPE', 'required');
                $this->form_validation->set_rules('grade_type', 'GRADE TYPE', 'required');
                $this->form_validation->set_rules('api1', 'API/PROPIETARY', 'required');
                $this->form_validation->set_rules('sour_classificasion', 'SOUR CLASSIFICASION', 'required');
                $this->form_validation->set_rules('chrome_content', 'CHROME CONTENT', 'required');
                $this->form_validation->set_rules('speciality', 'SPECIALITY', 'required');
                $this->form_validation->set_rules('conection_standart', 'CONNECTION STANDARD', 'required');
                $this->form_validation->set_rules('api2', 'API/PROPIETARY', 'required');
                $this->form_validation->set_rules('api3', 'API/PROPIETARY', 'required');
                $this->form_validation->set_rules('conection_owner', 'CONNECTION OWNER', 'required');
                $this->form_validation->set_rules('country', 'COUNTRY', 'required');
                $this->form_validation->set_rules('location', 'LOCATION', 'required');
                $this->form_validation->set_rules('post_code', 'POST CODE', 'required');
                $this->form_validation->set_rules('state', 'State', 'required');
                $this->form_validation->set_rules('street_addres', 'STREET ADDRESS', 'required');
                $this->form_validation->set_rules('manufacturer_name', 'MANUFACTURER NAME', 'required');
                $this->form_validation->set_rules('manufacturing_country', 'MANUFACTURING COUNTRY', 'required');
                $this->form_validation->set_rules('manufacturer_other', 'OTHER', 'required');
                $this->form_validation->set_rules('year_manufacture', 'YEAR MANUFACTURE', 'required|numeric');
                $this->form_validation->set_rules('price', 'PRICE', 'required|numeric');
                $this->form_validation->set_rules('quantity', 'QUANTITY', 'required');
                
                if($this->form_validation->run() === FALSE ){
                	$this->session->set_flashdata('message', 'input field errors');
                    $this->template->load('template/template','member/user_create_listing');
                }else{                	
		            $this->load->model('M_member');
					$this->M_member->create();
					redirect('member/Listing_analysis');
                }
            }

		
	

}

?>