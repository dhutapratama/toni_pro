<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Render extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();

		$username 	= $this->session->userdata('username');
		$role 		= $this->session->userdata('role');

		if ($role == 'kantin') {
			$role = 'admin';
		}

		if($this->uri->segment(1) == 'logout') {
			$this->session->sess_destroy();
			redirect();
		}

		if(!empty($username)) {

			if($this->uri->segment(1) == 'logout') {
				$this->session->sess_destroy();
			} elseif($this->uri->segment(1) != $role) {
				switch ($role) {
					case 'admin':
						redirect('admin');
						break;
					
					case 'pegawai':
						redirect('pegawai');
						break;

					case 'kantin':
						redirect('kantin');
						break;

					default: 
						$this->session->sess_destroy();
						break;
				}
			}
		} else {
			switch ($this->uri->segment(1)) {
				case 'home':
					
					break;

				case '':
				
					break;
				
				default:
					redirect();
					break;
			}
		}
	}

	public function view($name = 'error', $data = array()) {
		$this->load->view('static/header_'.$this->session->userdata('role'), $data);
		$this->load->view($name);
		$this->load->view('static/footer');
	}
}
