<?php 
/**
* 
*/
class C_statistic extends MY_controller
{
	
	public function __construct()
		{
			parent::__construct();
			$this->load->model('M_admin');
			//memanggil function dari MY_Controller
			$this->cekLogin();
			//validasi jika session dengan level karyawan mengakses halaman ini maka akan dialihkan ke halaman karyawan
			if ($this->session->userdata('access') == "m") {
				redirect('member/C_member');
			}
		}
		
	public function index(){
		$this->template->load('template/template','admin/admin_site_statistic');
	}
}