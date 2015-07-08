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
}
