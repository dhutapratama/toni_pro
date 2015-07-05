<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$this->render->view('admin/notifikasi');
	}

	public function makanan()
	{
		$this->render->view('admin/buah');
	}

	private function _pokok() {
		$this->render->view('admin/pokok');
	}

	private function _lauk_pauk() {
		$this->render->view('admin/lauk_pauk');
	}

	private function _sayur() {
		$this->render->view('admin/sayur');
	}

	private function _buah() {
		$this->render->view('admin/buah');
	}

	private function _minuman() {
		$this->render->view('admin/minuman');
	}

	public function pegawai()
	{
		$this->render->view('admin/pegawai');
	}

	public function menu()
	{
		$this->render->view('admin/menu_pegawai');
	}

	public function administrator()
	{
		$this->render->view('admin/data_admin');
	}

	public function divisi()
	{
		$this->render->view('admin/divisi');
	}
}
