<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	// Start of index function
	public function index()
	{
		$this->render->view('admin/home');
	}
	// End of index function

	// Start of makanan function
	public function makanan($option = 'pokok', $selector = '')
	{
		$option = '_' . $option;
		$this->$option($selector);
	}
	// End of makanan function

	// Start of makanan/pokok function
	private function _pokok($selector) {
		switch ($selector) {
			case 'insert':
				$this->_insert_makanan_pokok();
				break;
			
			default:
				$data['get_makanan_pokoks'] = $this->m_makanan_pokok->get_makanan_pokoks();
				$this->render->view('admin/makanan_pokok', $data);
				break;
		}
	}

	private function _insert_makanan_pokok() {
		$data['nama_makanan'] = $this->input->post('nama_makanan');
		
		$this->m_makanan_pokok->insert_makanan_pokok($data);

		redirect('admin/makanan/pokok');
	}
	// End of makanan/pokok function

	// Start of makanan/lauk_pauk function
	private function _lauk_pauk($selector) {
		switch ($selector) {
			case 'insert':
				$this->_insert_makanan_lauk_pauk();
				break;
			
			default:
				$data['get_makanan_lauk_pauks'] = $this->m_makanan_lauk_pauk->get_makanan_lauk_pauks();
				$this->render->view('admin/makanan_lauk_pauk', $data);
				break;
		}
	}
	private function _insert_makanan_lauk_pauk() {
		$data['nama_makanan'] = $this->input->post('nama_makanan');
		
		$this->m_makanan_lauk_pauk->insert_makanan_lauk_pauk($data);

		redirect('admin/makanan/lauk_pauk');
	}
	// End of makanan/lauk_pauk function

	// Start of makanan/sayur function
	private function _sayur($selector) {
		switch ($selector) {
			case 'insert':
				$this->_insert_makanan_sayur();
				break;
			
			default:
				$data['get_makanan_sayurs'] = $this->m_makanan_sayur->get_makanan_sayurs();
				$data['get_divisis'] = $this->m_divisi->get_divisis();
				$this->render->view('admin/makanan_sayur', $data);
				break;
		}
	}

	private function _insert_makanan_sayur() {
		$data['nama_makanan'] = $this->input->post('nama_makanan');
		
		$this->m_makanan_sayur->insert_makanan_sayur($data);

		redirect('admin/makanan/sayur');
	}
	// End of makanan/sayur function

	// Start of makanan/buah function
	private function _buah($selector) {
		switch ($selector) {
			case 'insert':
				$this->_insert_makanan_buah();
				break;
			
			default:
				$data['get_makanan_buahs'] = $this->m_makanan_buah->get_makanan_buahs();
				$this->render->view('admin/makanan_buah', $data);
				break;
		}
	}

	private function _insert_makanan_buah() {
		$data['nama_makanan'] = $this->input->post('nama_makanan');
		
		$this->m_makanan_buah->insert_makanan_buah($data);

		redirect('admin/makanan/buah');
	}
	// End of makanan/buah function

	// Start of makanan/minuman function
	private function _minuman($selector) {
		switch ($selector) {
			case 'insert':
				$this->_insert_makanan_minuman();
				break;
			
			default:
				$data['get_makanan_minumans'] = $this->m_makanan_minuman->get_makanan_minumans();
				$this->render->view('admin/makanan_minuman', $data);
				break;
		}
	}

	private function _insert_makanan_minuman() {
		$data['nama_makanan'] = $this->input->post('nama_makanan');
		
		$this->m_makanan_minuman->insert_makanan_minuman($data);

		redirect('admin/makanan/minuman');
	}
	// End of minuman function

	// Start of pegawai function
	public function pegawai($selector = "")
	{
		switch ($selector) {
			case 'insert':
				$this->_insert_pegawai();
				break;
			
			default:
				$data['get_pegawais'] = $this->m_pegawai->get_pegawais();
				$data['get_divisis'] = $this->m_divisi->get_divisis();
				$this->render->view('admin/data_pegawai', $data);
				break;
		}
	}

	private function _insert_pegawai() {
		$data['nomor_induk']   = $this->input->post('nomor_induk');
		$data['nama']          = $this->input->post('nama');
		$data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
		$data['id_divisi']     = $this->input->post('divisi');
		
		$this->m_pegawai->insert_pegawai($data);

		redirect('admin/pegawai');
	}
	// End of pegawai function

	public function menu()
	{
		$this->render->view('admin/menu_pegawai');
	}

	// Start of administrator function
	public function administrator($selector = '')
	{
		switch ($selector) {
			case 'insert':
				$this->_insert_administrator();
				break;
			
			default:
				$data['get_admins'] = $this->m_administrator->get_administrators();
				$this->render->view('admin/data_admin', $data);
				break;
		}
	}

	private function _insert_administrator() {
		$data['username'] = $this->input->post('username');
		$data['password'] = $this->input->post('password');
		$data['nama']     = $this->input->post('nama');
		$data['email']    = $this->input->post('email');
		$data['type']     = $this->input->post('type');
		
		$this->m_administrator->insert_administrator($data);

		redirect('admin/administrator');
	}
	// End of administrator function

	// Start of divisi function
	public function divisi($selector = "")
	{
		switch ($selector) {
			case 'insert':
				$this->_insert_divisi();
				break;
			
			default:
				$data['get_divisis'] = $this->m_divisi->get_divisis();
				$this->render->view('admin/data_divisi', $data);
				break;
		}
	}

	private function _insert_divisi() {
		$data['nama_divisi'] = $this->input->post('nama_divisi');
		
		$this->m_divisi->insert_divisi($data);

		redirect('admin/divisi');
	}
	// End of divisi function
}
