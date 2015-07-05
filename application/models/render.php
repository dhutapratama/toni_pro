<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Render extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function view($name = 'error', $data = array()) {
		$this->load->view('static/header', $data);
		$this->load->view($name);
		$this->load->view('static/footer');
	}
}
