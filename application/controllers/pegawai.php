<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		echo "home";
	}

	public function kalori()
	{
		echo "kalori";
	}

	public function profil()
	{
		echo "profil";
	}
}
