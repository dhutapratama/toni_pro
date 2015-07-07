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
	public function makanan($option = 'pokok', $selector = '', $id = '')
	{
		$option = '_' . $option;
		$this->$option($selector, $id);
	}
	// End of makanan function

	// Start of makanan/pokok function
	private function _pokok($selector = '', $id = '') {
		switch ($selector) {
			case 'insert':
				$this->_insert_makanan_pokok();
				break;

			case 'update':
				$this->_update_makanan_pokok($id);
				break;
			
			case 'delete':
				$this->_delete_makanan_pokok($id);
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

		redirect('admin/makanan/pokok/'.md5(time()));
	}

	private function _delete_makanan_pokok($id) {
		$this->m_makanan_pokok->delete_makanan_pokok($id);
		redirect('admin/makanan/pokok/'.md5(time()));
	}

	private function _update_makanan_pokok($id) {
		$data['nama_makanan'] = $this->input->post('nama_makanan');
		
		$this->m_makanan_pokok->update_makanan_pokok($id, $data);

		redirect('admin/makanan/pokok/'.md5(time()));
	}
	// End of makanan/pokok function

	// Start of makanan/lauk_pauk function
	private function _lauk_pauk($selector = '', $id = '') {
		switch ($selector) {
			case 'insert':
				$this->_insert_makanan_lauk_pauk();
				break;
			
			case 'delete':
				$this->_delete_makanan_lauk_pauk($id);
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

		redirect('admin/makanan/lauk_pauk/'.md5(time()));
	}

	private function _delete_makanan_lauk_pauk($id) {
		$this->m_makanan_lauk_pauk->delete_makanan_lauk_pauk($id);

		redirect('admin/makanan/lauk_pauk/'.md5(time()));
	}

	private function _update_makanan_lauk_pauk($id) {
		$data['nama_makanan'] = $this->input->post('nama_makanan');
		
		$this->m_makanan_lauk_pauk->update_makanan_lauk_pauk($id, $data);

		redirect('admin/makanan/lauk_pauk/'.md5(time()));
	}
	// End of makanan/lauk_pauk function

	// Start of makanan/sayur function
	private function _sayur($selector = '', $id = '') {
		switch ($selector) {
			case 'insert':
				$this->_insert_makanan_sayur();
				break;

			case 'update':
				$this->_update_makanan_sayur($id);
				break;
			
			case 'delete':
				$this->_delete_makanan_sayur($id);
				break;
			
			default:
				$data['get_makanan_sayurs'] = $this->m_makanan_sayur->get_makanan_sayurs();
				$this->render->view('admin/makanan_sayur', $data);
				break;
		}
	}

	private function _insert_makanan_sayur() {
		$data['nama_makanan'] = $this->input->post('nama_makanan');
		
		$this->m_makanan_sayur->insert_makanan_sayur($data);

		redirect('admin/makanan/sayur/'.md5(time()));
	}

	private function _delete_makanan_sayur($id) {
		$this->m_makanan_sayur->delete_makanan_sayur($id);

		redirect('admin/makanan/sayur/'.md5(time()));
	}

	private function _update_makanan_sayur($id) {
		$data['nama_makanan'] = $this->input->post('nama_makanan');
		
		$this->m_makanan_sayur->update_makanan_sayur($id, $data);

		redirect('admin/makanan/sayur/'.md5(time()));
	}
	// End of makanan/sayur function

	// Start of makanan/buah function
	private function _buah($selector = '', $id = '') {
		switch ($selector) {
			case 'insert':
				$this->_insert_makanan_buah();
				break;

			case 'update':
				$this->_update_makanan_buah($id);
				break;
			
			case 'delete':
				$this->_delete_makanan_buah($id);
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

		redirect('admin/makanan/buah/'.md5(time()));
	}

	private function _delete_makanan_buah($id) {
		$this->m_makanan_buah->delete_makanan_buah($id);

		redirect('admin/makanan/buah/'.md5(time()));
	}

	private function _update_makanan_buah($id) {
		$data['nama_makanan'] = $this->input->post('nama_makanan');
		
		$this->m_makanan_buah->update_makanan_buah($id, $data);

		redirect('admin/makanan/buah/'.md5(time()));
	}
	// End of makanan/buah function

	// Start of makanan/minuman function
	private function _minuman($selector = '', $id = '') {
		switch ($selector) {
			case 'insert':
				$this->_insert_makanan_minuman();
				break;

			case 'update':
				$this->_update_makanan_minuman();
				break;
			
			case 'delete':
				$this->_delete_makanan_minuman($id);
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

		redirect('admin/makanan/minuman/'.md5(time()));
	}

	private function _delete_makanan_minuman($id) {
		$this->m_makanan_minuman->delete_makanan_minuman($id);

		redirect('admin/makanan/minuman/'.md5(time()));
	}

	private function _update_makanan_minuman($id) {
		$data['nama_makanan'] = $this->input->post('nama_makanan');
		
		$this->m_makanan_minuman->update_makanan_minuman($id, $data);

		redirect('admin/makanan/minuman/'.md5(time()));
	}
	// End of minuman function

	// Start of pegawai function
	public function pegawai($selector = '', $id = '')
	{
		switch ($selector) {
			case 'insert':
				$this->_insert_pegawai();
				break;

			case 'update':
				$this->_update_pegawai($id);
				break;
			
			case 'delete':
				$this->_delete_pegawai($id);
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

		redirect('admin/pegawai/'.md5(time()));
	}

	private function _delete_pegawai($id) {
		$this->m_pegawai->delete_pegawai($id);

		redirect('admin/pegawai/'.md5(time()));
	}

	private function _update_pegawai($id) {
		$data['nomor_induk']   = $this->input->post('nomor_induk');
		$data['nama']          = $this->input->post('nama');
		$data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
		$data['id_divisi']     = $this->input->post('divisi');
		
		$this->m_pegawai->update_pegawai($id, $data);

		redirect('admin/pegawai/'.md5(time()));
	}
	// End of pegawai function

	public function menu($selector = '', $id = '')
	{
		switch ($selector) {
			case 'edit':
				$data['get_pegawai'] = $this->m_pegawai->get_pegawai_by_id($id);
				$this->render->view('admin/menu_pegawai_add', $data);
				break;
			
			default:
				$data['get_pegawais'] = $this->m_pegawai->get_pegawais();
				$this->render->view('admin/menu_pegawai', $data);
				break;
		}
		
	}

	// Start of administrator function
	public function administrator($selector = '', $id = '')
	{
		switch ($selector) {
			case 'insert':
				$this->_insert_administrator();
				break;

			case 'update':
				$this->_update_administrator($id);
				break;
			
			case 'delete':
				$this->_delete_administrator($id);
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

		redirect('admin/administrator/'.md5(time()));
	}

	private function _delete_administrator($id) {
		$this->m_administrator->delete_administrator($id);

		redirect('admin/administrator/'.md5(time()));
	}

	private function _update_administrator($id) {
		$data['username'] = $this->input->post('username');
		$data['password'] = $this->input->post('password');
		$data['nama']     = $this->input->post('nama');
		$data['email']    = $this->input->post('email');
		$data['type']     = $this->input->post('type');
		
		$this->m_administrator->update_administrator($id, $data);

		redirect('admin/administrator/'.md5(time()));
	}
	// End of administrator function

	// Start of divisi function
	public function divisi($selector = '', $id = '')
	{
		switch ($selector) {
			case 'insert':
				$this->_insert_divisi();
				break;

			case 'update':
				$this->_update_divisi($id);
				break;
			
			case 'delete':
				$this->_delete_divisi($id);
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

		redirect('admin/divisi/'.md5(time()));
	}

	private function _delete_divisi($id) {
		$this->m_divisi->delete_divisi($id);

		redirect('admin/divisi/'.md5(time()));
	}

	private function _update_divisi($id) {
		$data['nama_divisi'] = $this->input->post('nama_divisi');
		
		$this->m_divisi->update_divisi($id, $data);

		redirect('admin/divisi/'.md5(time()));
	}
	// End of divisi function
}
