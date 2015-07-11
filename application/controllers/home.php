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
}
