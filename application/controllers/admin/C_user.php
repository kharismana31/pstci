<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends MY_Controller{
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
			$this->template->load('template/template','admin/admin_user_regis');
		}
		public function add_register(){
			//ambil data dari form 
			$this->load->library('email');
			
			$fname        = $this->input->post('firstname');
			$sname        = $this->input->post('surname');
			$company      = $this->input->post('company');
			$bisnis       = $this->input->post('bisnis');
			$country      = $this->input->post('country');
			$country_code = $this->input->post('ccode');
			$pnumber      = $this->input->post('pnumber');
			$email        = $this->input->post('email');
			$psw          = $this->input->post('password');
			$access       ='a';
			
			$cost = rand(8, 11);
			$options = [
			'cost'   => $cost,
			];
			
			$hash =  password_hash($psw, PASSWORD_DEFAULT,$options);
			
			$data = array(
			'fname'        => $fname ,
			'surename'     => $sname ,
			'company'      => $company ,
			'business_type'=> $bisnis ,
			'country'      => $country ,
			'country_code' => $country_code ,
			'phone_number' => $pnumber ,
			'email'        => $email ,
			'password'     => $hash ,
			'access'       => $access 
			);
			
			$this->db->insert('users',$data);
			//redirect('C_auth/login');
			
			$ver  = password_hash($email, PASSWORD_DEFAULT);
			$ver2 = md5($ver);
			
			$config = array();
			$config['charset']      = 'utf-8';
			$config['useragent']    = 'Codeigniter';
			$config['protocol']     = "smtp";
			$config['mailtype']     = "html";
			$config['smtp_host']    = "ssl://smtp.gmail.com";
			$config['smtp_port']    = "465";
			$config['smtp_timeout'] = "400";
			$config['smtp_user']    = "inopstnewest@gmail.com";
			$config['smtp_pass']    = "inouser123";
			$config['crlf']         = "\r\n"; 
			$config['newline']      = "\r\n";
			$config['wordwrap']     = TRUE;
			
			$this->email->initialize($config);
			$this->email->from($config['smtp_user']);
			$this->email->to($email);
			$this->email->subject("Verifikasi Akun");
			$this->email->message(
			"thank you for registration, to verify please click the link below<br><br>".
			site_url("admin/C_user/verification/".$ver2.$pnumber.$this->generate()."")
			);
			
			if($this->email->send()){
				// echo "Berhasil melakukan registrasi, silahkan cek email kamu";
			}
			else{
				// echo "Berhasil melakukan registrasi, namun gagal mengirim verifikasi email";
			}
			// echo "<br><br><a href='".site_url("c_auth/update_active")."'>Kembali ke Menu Login</a>";
			$this->template->load('template/template','admin/admin_register');
			return $this->email->send();
			
		}
		
		public function verification($key)
		{
			$this->load->model('M_auth');
			$var =  substr($key, 32, -10);
			$this->db->from('users');
			$this->db->where('phone_number', $var);
			$rawdata = $this->db->get();
			
			foreach($rawdata->result_array() as $row)
			{	
				$fname   =  $row['fname'];
				$surname =  $row['surename'];
				$email   =  $row['email'];
				
				$data = array(
				'fname'   => $fname,
				'surname' => $surname,
				'email'   => $email
				);
				$this->template->load('template/template','admin/admin_verif',$data);
			}
			$this->M_auth->update_active($var);
		}
		public function generate($length = 10) {
			$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$charactersLength = strlen($characters);
			$randomString = '';
			for ($i = 0; $i < $length; $i++) {
				$randomString .= $characters[rand(0, $charactersLength - 1)];
			}
			return $randomString;
		}
}