<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Grade extends MY_Controller
	{
		public function __construct()
		{
			parent::__construct();
			//memanggil function dari MY_Controller
			$this->cekLogin();
			//validasi jika session dengan level karyawan mengakses halaman ini maka akan dialihkan ke halaman karyawan
			if ($this->session->userdata('access') == "m") {
				redirect('member/C_member');
			}
		}
		
		public function index()
		{
			$this->template->load('template/template','admin/master/grade/list');
		}

        public function add()
        {
            $data['tipe'] = "Add";
            $data['url'] = base_url().'admin/grade/add_item';
            $this->template->load('template/template','admin/master/grade/content', $data);
        }

        public function add_item()
        {
            $con = new M_grade();
            $con->name = ($this->input->post('other') != "") ? $this->input->post('other') : $this->input->post('name');
            $con->type = $this->input->post('type');
            $con->owner = $this->input->post('owner');
            $con->standard = $this->input->post('standard');
            $con->additional_feature = $this->input->post('additional_feature');
            $con->save();
            redirect(base_url('admin/grade'));
        }
		
		public function delete()
		{
			$data = $this->input->post('id');
			foreach ($data as $id) {
			    M_grade::find($id)->delete();
			}
		}

        public function edit($id)
        {
            $data['tipe'] = "Edit";
            $data['con'] = M_grade::find($id);
            $data['url'] = base_url().'admin/grade/update/' . $id;
            $this->template->load('template/template','admin/master/grade/content', $data);
        }
		
		public function update($id)
		{
            $con = M_connection::findOrFail($id);
            $con->name = ($this->input->post('other') != "") ? $this->input->post('other') : $this->input->post('name');
            $con->type = $this->input->post('type');
            $con->owner = $this->input->post('owner');
            $con->standard = $this->input->post('standard');
            $con->additional_feature = $this->input->post('additional_feature');
            $con->save();
            redirect(base_url('admin/connection'));
        }
		
		public function table_list(){	
			$this->datatables->select('grades.id,grade_applications.name AS grade_app,min_yl_metric,min_yl_imperial,product_type, grades.name,type,standard,owner');

            $this->datatables->join('grade_applications', 'grades.id = grade_applications.id_grade');

            $this->datatables->add_column('id', "<div class='checkbox'><input type='checkbox' class='checkbox' value='$1' id='$1'><label for='$1'></label></div>",'id');
            $this->datatables->add_column('name', "$1", 'name');
            $this->datatables->add_column('product_type', "$1", 'product_type');
            $this->datatables->add_column('type', "$1", 'type');
            $this->datatables->add_column('min_yl_metric', "$1", 'min_yl_metric');
            $this->datatables->add_column('min_yl_imperial', "$1", 'min_yl_imperial');
            $this->datatables->add_column('standard', "$1", 'standard');
            $this->datatables->add_column('owner', "$1", 'owner');
            $this->datatables->add_column('grade_app', "$1", 'grade_app');
            $this->datatables->add_column('btn', "<button class='btn btn-success' class='btn-old'><i class='fa fa-edit'></i></button>", 'btn');

			$this->datatables->from('grades');
			return print_r($this->datatables->generate());
		}
		
	}
