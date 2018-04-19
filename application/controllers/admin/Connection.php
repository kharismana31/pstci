<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Connection extends MY_Controller
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
			$this->template->load('template/template','admin/master/connection/list');
		}

        public function add()
        {
            $data['tipe'] = "Add";
            $data['url'] = base_url().'admin/connection/add_item';
            $this->template->load('template/template','admin/master/connection/content', $data);
        }

        public function add_item()
        {
            $con = new M_connection();
            $con->name = ($this->input->post('other') != "") ? $this->input->post('other') : $this->input->post('name');
            $con->type = $this->input->post('type');
            $con->owner = $this->input->post('owner');
            $con->standard = $this->input->post('standard');
            $con->additional_feature = $this->input->post('additional_feature');
            $con->save();
            redirect(base_url('admin/connection'));
        }
		
		public function delete()
		{
			$data = $this->input->post('id');
			foreach ($data as $id) {
			    M_connection::find($id)->delete();
			}
		}

        public function edit($id)
        {
            $data['tipe'] = "Edit";
            $data['con'] = M_connection::find($id);
            $data['url'] = base_url().'admin/connection/update/' . $id;
            $this->template->load('template/template','admin/master/connection/content', $data);
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
			$this->datatables->select('id,id AS prod_id,name,type,standard,owner,additional_feature');

            $this->datatables->add_column('id', "<div class='checkbox'><input type='checkbox' class='checkbox' value='$1' id='$1'><label for='$1'></label></div>",'id');
            $this->datatables->add_column('prod_id', "$1",'prod_id');
            $this->datatables->add_column('name', "$1", 'name');
            $this->datatables->add_column('type', "$1", 'type');
            $this->datatables->add_column('standard', "$1", 'standard');
            $this->datatables->add_column('owner', "$1", 'owner');
            $this->datatables->add_column('additional_feature', "$1", 'additional_feature');
            $this->datatables->add_column('btn', "<button class='btn btn-success' class='btn-old'><i class='fa fa-edit'></i></button>", 'btn');

			$this->datatables->from('connections');
			return print_r($this->datatables->generate());
		}
		
	}
