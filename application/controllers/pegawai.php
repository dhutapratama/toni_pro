<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	// Start of index function
	public function index()
	{
		$this->render->view('pegawai/home');
	}
	// End of index function

	// Start of profil function
	public function profil($selector = '', $id = '')
	{
		switch ($selector) {
			case 'update':
				$this->_insert_profil();
				break;

			default:
				$data['get_pegawai'] = $this->m_pegawai->get_pegawai_by_id("5");
				$this->render->view('pegawai/profil', $data);
				break;
		}
	}

	private function _update_profil() {
		$data['nama_profil'] = $this->input->post('nama_profil');
		
		$this->m_pegawai->update_pegawai($data);

		redirect('pegawai/profil/'.md5(time()));
	}
	// End of profil function

	// Start of kalori function
	public function kalori($selector = '', $id = '')
	{
		switch ($selector) {
			case 'update':
				$this->_update_kalori();
				break;

			default:
				$data['get_kalori'] = $this->m_kalori->get_kalori_by_id_user();
				$this->render->view('pegawai/kalori', $data);
				break;
		}
	}

	private function _update_kalori() {
		$data['nama_profil'] = $this->input->post('nama_profil');
		
		$this->m_kalori->update_kalori($data);

		redirect('pegawai/kalori/'.md5(time()));
	}
	// End of profil function
}