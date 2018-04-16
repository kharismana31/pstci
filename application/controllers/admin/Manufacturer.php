<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manufacturer extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->template->load('template/template','admin/admin_manufacturer');
    }

    public function add()
    {
        $data['url'] = site_url() . 'admin/Manufacturer/add_main_mill';
        $data['tipe'] = 'Register new';
        $this->template->load('template/template','admin/admin_entry_manufacturer', $data);
    }

    public function edit($id)
    {
        $data['url'] = site_url() . 'admin/Manufacturer/edit_main_mill/' . $id;
        $data['tipe'] = 'Edit detail of';
        $data['mill'] = M_manufacturer::findOrFail($id);
        $this->template->load('template/template','admin/admin_entry_manufacturer', $data);
    }

    public function add_main_mill()
    {
        $mill = new M_manufacturer();
        $mill->name = $this->input->post('name');
        $mill->country = $this->input->post('country');
        $mill->year = $this->input->post('year');
        $mill->save();
        redirect(base_url('admin/Manufacturer/'));
    }

    public function edit_main_mill($id)
    {
        $mill = M_manufacturer::find($id);
        $mill->name = $this->input->post('name');
        $mill->country = $this->input->post('country');
        $mill->year = $this->input->post('year');
        $mill->save();
        redirect(base_url('admin/Manufacturer/'));
    }

    public function delete_check(){
        $data = $this->input->post('id');
        foreach ($data as $id) {
            $this->db->where('id', $id);
            $this->db->delete('manufacturers');
        }
    }

    public function table_list(){
        $this->datatables->select('id,name,country,year');

        $this->datatables->add_column('id', "<div class='checkbox'><input type='checkbox' class='checkbox' value='$1' id='$1'><label for='$1'></label></div>",'id');
        $this->datatables->add_column('name', "<p>$1</p>", 'name');
        $this->datatables->add_column('country', "<p>$1</p>", 'country');
        $this->datatables->add_column('year', "<p>$1</p>", 'year');

        $this->datatables->from('manufacturers');
        return print_r($this->datatables->generate());
    }

}