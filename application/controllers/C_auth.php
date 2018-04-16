<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class C_auth extends CI_Controller
	{
		
		public function __construct(){
			parent::__construct();
			$this->load->model('M_auth');	
		}
		
		public function cekAkun()
		{
			//membuat validasi login
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			
			$query = $this->M_auth->cekAkun($email, $password);
			if ($query === 1) {
				echo '
				<script type="text/javascript">
				alert("Data Tidak Ditemukan");
				</script>
				';
			}
			else if ($query === 2) {
				echo '
				<script type="text/javascript">
				alert("Email Verifikasi");
				</script>
				';
			}
			else if ($query === 3) {
				echo '
				<script type="text/javascript">
				alert("Password Salah");
				</script>
				';
			}
			else if ($query === 4) {
				redirect('C_auth/captcha');
			}
			else {
				//membuat session dengan nama userdata
				$userData = array(
				'id'           => $query->id,
				'email'        => $query->email,
				'fname'        => $query->fname,
				'access'       => $query->access,
				'logged_in'    => TRUE
				);
				$this->session->set_userdata($userData);
				return TRUE;
			}
		}
		
		public function login()
		{
			// Security Captcha
			if (!empty($_SESSION['auth'])){
				redirect('C_auth/captcha');
			}
			
			//melakukan pengalihan halaman sesuai dengan levelnya
			if ($this->session->userdata('access') == "m"){
				redirect('member/C_member');
			}
			if ($this->session->userdata('access') == "a"){
				redirect('admin/Admin');
			}
			//proses login dan validasi nya
			if ($this->input->post('submit')) {
				$this->form_validation->set_rules('email', 'Email', 'required');
				$this->form_validation->set_rules('password', 'Password', 'required');
				$error = $this->cekAkun();
				if ($this->form_validation->run() && $error === TRUE) {
					$data = $this->M_auth->cekAkun(
					$this->input->post('email'),
					$this->input->post('password')
					);
					
					//jika bernilai TRUE maka alihkan halaman sesuai dengan level nya
					if($data->access == 'a'){
						redirect('admin/Admin');
					}
					else if($data->access == 'm'){
						redirect('member/C_member');
					}
				}
				
				//Jika bernilai FALSE maka tampilkan error
				else{
					$data['error'] = $error;
					$this->template->load('template/template','public/public_login',$data);
				}
			}
			//Jika tidak maka alihkan kembali ke halaman login
			else{
				//$this->load->view('public/public_login');
				$this->template->load('template/template','public/public_login');
			}
		}
		
		public function logout()
		{
			//Menghapus semua session (sesi)
			$this->session->sess_destroy();
			redirect('C_auth/login');
		}
		
		public function sess()
		{
			$recaptcha = $this->input->post('g-recaptcha-response');
			$response = $this->recaptcha->verifyResponse($recaptcha);
			
			if ($this->form_validation->run() == FALSE || !isset($response['success']) || $response['success'] <> true) {
				redirect('C_auth/captcha');
			}
			else {
				$this->session->sess_destroy();
				redirect('C_auth/login');
			}
		}
		
		public function register()
		{
			$this->template->load('template/template','public/public_register');
		}
		
		public function add_register(){
			//ambil data dari form 
			$this->load->library('email');
			
			$fname        = $this->input->post('fristname');
			$sname        = $this->input->post('surename');
			$company      = $this->input->post('company');
			$bisnis       = $this->input->post('bisnis');
			$country      = $this->input->post('country');
			$country_code = $this->input->post('countrycode');
			$pnumber      = $this->input->post('phonenumber');
			$email        = $this->input->post('email');
			$psw          = $this->input->post('password');
			$access       ='m';
			
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
			site_url("C_auth/verification/".$ver2.$pnumber.$this->generate()."")
			);
			
			if($this->email->send()){
				// echo "Berhasil melakukan registrasi, silahkan cek email kamu";
			}
			else{
				// echo "Berhasil melakukan registrasi, namun gagal mengirim verifikasi email";
			}
			// echo "<br><br><a href='".site_url("c_auth/update_active")."'>Kembali ke Menu Login</a>";
			$this->template->load('template/template','public/public_register_success');
			return $this->email->send();
			
		}
		
		public function verification($key)
		{
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
				$this->template->load('template/template','public/public_email_verif',$data);
			}
			$this->M_auth->update_active($var);
		}
		
		public function captcha()
		{
			if (empty($_SESSION['auth'])){
				redirect('C_auth/login');
			}
			else{
				$data = array(
				'captcha' => $this->recaptcha->getWidget(), // menampilkan recaptcha
				'script_captcha' => $this->recaptcha->getScriptTag(), // javascript recaptcha ditaruh di head
				);
				
				$this->template->load('template/template','public/public_login_captcha',$data);
			}
		}
		
		public function forgot()
		{
			$this->template->load('template/template','public/public_forgot');
		}
		
		public function forgot_email()
		{
			$email =  $this->input->post('email');
			$this->db->from('users');
			$this->db->where('email', $email);
			$rawdata = $this->db->get();
			if($rawdata->num_rows() > 0){
				$ver  = password_hash($email, PASSWORD_DEFAULT);
				$ver2 = md5($ver);
				foreach($rawdata->result_array() as $row)
				{	
					$num =  $row['phone_number'];
				}
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
				$this->email->subject("Forgot Account");
				$this->email->message(
				"Forgot Your Account, to verify please click the link below<br><br>".
				site_url("C_auth/forgot_dsp/".$ver2.$num.$this->generate()."")
				);
				
				if($this->email->send()){
					// echo "Berhasil melakukan registrasi, silahkan cek email kamu";
				}
				else{
					// echo "Berhasil melakukan registrasi, namun gagal mengirim verifikasi email";
				}
				$this->template->load('template/template','public/public_forgot_success');
				return $this->email->send();
			}
			else{
				echo '
				<script type="text/javascript">
				alert("Email Tidak Ada");
				</script>
				';
				$this->template->load('template/template','public/public_forgot');
			}
		}
		
		public function forgot_dsp($ver)
		{
			$num = substr($ver,32,-10);
			$this->db->from('users');
			$this->db->where('phone_number', $num);
			$rawdata = $this->db->get();
			foreach($rawdata->result_array() as $row)
			{	
				$email = $row['email'];
			}
			$data['email'] = $email;
			$this->template->load('template/template','public/public_forgot_result',$data);
		}
		
		public function forgot_result()
		{
			$email    = $this->input->post('email');
			$password = $this->input->post('password');
			
			$cost = rand(8, 11);
			$options = [
			'cost'   => $cost,
			];
			
			$hash =  password_hash($password, PASSWORD_DEFAULT,$options);
			
			$this->M_auth->update_forgot($email,$hash);
			echo '
			<script type="text/javascript">
			alert("Forgot Password Success");
			window.location.href="'.site_url('C_auth/login').'";
			</script>
			';
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
	
