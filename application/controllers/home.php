<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$data['username'] = $this->input->post('username');
			$data['password'] = $this->input->post('password');
			
			$this->m_administrator->login($data['username'], $data['password']);
			$this->m_pegawai->login($data['username'], $data['password']);

			redirect('');
		}
		$this->load->view('login');
	}

	public function pendaftaran() {
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			if($this->input->post('kode_pendaftaran') == '') {
				$id 			  		  = $this->input->post('id');
				$data['username'] 		  = $this->input->post('username');
				$data['password'] 		  = $this->input->post('password');
				$data['kode_pendaftaran'] = 'active';
				$data['email'] 			  = $this->input->post('email');

				$this->m_pegawai->update_pegawai($id, $data);

				redirect();
			} else {
				$data['get_pegawai'] = $this->m_pegawai->get_pegawai_by_kode_pendaftaran();
				$this->load->view('pendaftaran', $data);
			}
		} else {
			redirect();
		}
	}

	public function reset_password($reset_url = '') {
		if ($reset_url == '') {
			$data['email'] = $this->input->post('email');
			$reset = $this->m_pegawai->reset_password($data);

			if ($reset == true) {
				$data['notifikasi'] = 'URL reset password anda telah kami kirimkan ke alamat email anda.';
				$data['alert_type'] = 'success';
				$this->load->view('login', $data);
			} else {
				$data['notifikasi'] = 'Email yang anda isikan tidak dapat di temukan di database.';
				$data['alert_type'] = 'danger';
				$this->load->view('login', $data);
			}
		} else {
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$id 			   = $this->input->post('id');
				$data['password']  = $this->input->post('password');
				$data['reset_url'] = '';
				$this->m_pegawai->update_pegawai($id, $data);

				$data['notifikasi'] = '<b>Password anda telah diperbarui</b>, gunakan password baru anda untuk masuk kedalam portal.';
				$data['alert_type'] = 'success';
				$this->load->view('login', $data);
			} else {
				$check = $this->m_pegawai->check_reset_url($reset_url);
				
				if ($check != false) {
					$data['id']  	   = $check->id;
					$data['nama']  	   = $check->nama;
					$data['reset_url'] = $reset_url;
					$this->load->view('reset_password', $data);
				} else {
					$data['notifikasi'] = 'URL tidak valid atau telah kadaluarsa.';
					$data['alert_type'] = 'danger';
					$this->load->view('login', $data);
				}
			}
		}
	}
}
