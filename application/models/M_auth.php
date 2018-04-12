<?php
	class M_auth extends CI_Model {
		
		//mengambil tabel users
		public $table = 'users';
		
		public function cekAkun($email, $password)
		{
			//cari username lalu lakukan validasi
			$this->db->where('email', $email);
			$query = $this->db->get($this->table)->row();
			
			//jika bernilai 1 maka user tidak ditemukan
			if (!$query) {
				if(isset($_SESSION['auth']))
				{
					if($_SESSION['auth'] > 3){
						$_SESSION['auth'] = 4;
						return 4;
					}
					else{
						$_SESSION['auth'] = $_SESSION['auth'] + 1;
						return 1;
					}
				}
				else{	
					$_SESSION['auth'] = 0;
					return 1;
				}
			}
			
			//jika bernilai 2 maka user tidak aktif
			if ($query->active == 0) return 2;
			
			//jika bernilai 3 maka password salah
			$hash = $query->password;
			if (!password_verify($password,$hash)) return 3;
			
			return $query;
		}
		function update_active($var)
		{
			$this->db->get('users');
			$data = array(
			'active' => '1'
			);
			
			$this->db->where('phone_number', $var);
			$this->db->update('users', $data);
		}	
		
		function update_forgot($email,$hash)
		{
			$this->db->get('users');
			$data = array(
			'password' => $hash
			);
			
			$this->db->where('email', $email);
			$this->db->update('users', $data);
		}
	}																									