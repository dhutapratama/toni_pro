<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	// Start of index function
	public function index($selector = '', $id = 0)
	{
		switch ($selector) {
			case 'delete':
				$this->m_notifikasi->delete_notifikasi($id);
				redirect();
				break;
			
			default:
				$data['get_notifikasis'] = $this->m_notifikasi->get_notifikasis();
				$this->render->view('admin/home', $data);
				break;
		}
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

			case 'edit':
				$data['get_makanan_pokok'] = $this->m_makanan_pokok->get_makanan_pokok_by_id($id);
				$this->render->view('admin/makanan_pokok_edit', $data);
				break;

			case 'update':
				$this->_update_makanan_pokok();
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

	private function _update_makanan_pokok() {
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$id 				  = $this->input->post('id');
			$data['nama_makanan'] = $this->input->post('nama_makanan');

			$this->m_makanan_pokok->update_makanan_pokok($id, $data);
		}
		redirect('admin/makanan/pokok/'.md5(time()));
	}
	// End of makanan/pokok function

	// Start of makanan/lauk_pauk function
	private function _lauk_pauk($selector = '', $id = '') {
		switch ($selector) {
			case 'insert':
				$this->_insert_makanan_lauk_pauk();
				break;

			case 'edit':
				$data['get_makanan_lauk_pauk'] = $this->m_makanan_lauk_pauk->get_makanan_lauk_pauk_by_id($id);
				$this->render->view('admin/makanan_lauk_pauk_edit', $data);
				break;

			case 'update':
				$this->_update_makanan_lauk_pauk();
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

	private function _update_makanan_lauk_pauk() {
		$id 				  = $this->input->post('id');
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

			case 'edit':
				$data['get_makanan_sayur'] = $this->m_makanan_sayur->get_makanan_sayur_by_id($id);
				$this->render->view('admin/makanan_sayur_edit', $data);
				break;

			case 'update':
				$this->_update_makanan_sayur();
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

	private function _update_makanan_sayur() {
		$id 				  = $this->input->post('id');
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

			case 'edit':
				$data['get_makanan_buah'] = $this->m_makanan_buah->get_makanan_buah_by_id($id);
				$this->render->view('admin/makanan_buah_edit', $data);
				break;

			case 'update':
				$this->_update_makanan_buah();
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

	private function _update_makanan_buah() {
		$id 				  = $this->input->post('id');
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

			case 'edit':
				$data['get_makanan_minuman'] = $this->m_makanan_minuman->get_makanan_minuman_by_id($id);
				$this->render->view('admin/makanan_minuman_edit', $data);
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

	private function _update_makanan_minuman() {
		$id 				  = $this->input->post('id');
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

			case 'edit':
				$data['get_divisis'] = $this->m_divisi->get_divisis();
				$data['get_pegawai'] = $this->m_pegawai->get_pegawai_by_id($id);
				$this->render->view('admin/data_pegawai_edit', $data);
				break;

			case 'update':
				$this->_update_pegawai();
				break;
			
			case 'delete':
				$this->_delete_pegawai($id);
				break;

			case 'reset':
				$this->_reset_pegawai($id);
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

	private function _update_pegawai() {
		$id 				   = $this->input->post('id');
		$data['nomor_induk']   = $this->input->post('nomor_induk');
		$data['nama']          = $this->input->post('nama');
		$data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
		$data['id_divisi']     = $this->input->post('divisi');
		
		$this->m_pegawai->update_pegawai($id, $data);

		redirect('admin/pegawai/'.md5(time()));
	}

	private function _reset_pegawai($id) {
		$this->m_pegawai->reset_password_pegawai($id);

		redirect('admin/pegawai/'.md5(time()));
	}
	// End of pegawai function

	// Start of menu function
	public function menu($selector = '', $id = '')
	{
		switch ($selector) {
			case 'insert':
				$this->_insert_menu($id);
				break;

			case 'edit':
				$data['get_pegawai']			= $this->m_pegawai->get_pegawai_by_id($id);
				$data['get_makanan_pokok']		= $this->m_makanan_pokok->get_makanan_pokoks();
				$data['get_makanan_lauk_pauk']	= $this->m_makanan_lauk_pauk->get_makanan_lauk_pauks();
				$data['get_makanan_sayur']	 	= $this->m_makanan_sayur->get_makanan_sayurs();
				$data['get_makanan_buah']	 	= $this->m_makanan_buah->get_makanan_buahs();
				$data['get_makanan_minuman'] 	= $this->m_makanan_minuman->get_makanan_minumans();
				$data['get_menu']				= $this->m_menu_makanan->get_menu_makanan_by_id_pegawai($id);

				if ($data['get_pegawai'] == false) {
					redirect('admin/menu');
				}

				$this->render->view('admin/menu_pegawai_add', $data);
				break;

			case 'change':
				$this->_change_menu($id);
				break;

			case 'delete':
				$this->_delete_menu($id);
				break;

			default:
				$data['get_pegawais'] = $this->m_pegawai->get_pegawais();
				$this->render->view('admin/menu_pegawai', $data);
				break;
		}
	}

	private function _insert_menu($id) {
		$data['id_user'] 			  = $id;
		$data['id_makanan_pokok'] 	  = $this->input->post('makanan_pokok');
		$data['id_makanan_lauk_pauk'] = $this->input->post('makanan_lauk_pauk');
		$data['id_makanan_sayur'] 	  = $this->input->post('makanan_sayur');
		$data['id_makanan_buah'] 	  = $this->input->post('makanan_buah');
		$data['id_minuman']		  	  = $this->input->post('makanan_minuman');
		
		$this->m_menu_makanan->insert_menu_makanan($data);

		redirect('admin/menu/edit/'.$id.'/'.md5(time()));
	}

	private function _delete_menu($id) {
		$this->m_menu_makanan->delete_menu_makanan($id);

		redirect('admin/menu/edit/');
	}

	private function _change_menu($id) {
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$data['id_makanan_pokok'] 	  = $this->input->post('makanan_pokok');
			$data['id_makanan_lauk_pauk'] = $this->input->post('makanan_lauk_pauk');
			$data['id_makanan_sayur'] 	  = $this->input->post('makanan_sayur');
			$data['id_makanan_buah'] 	  = $this->input->post('makanan_buah');
			$data['id_minuman']		  	  = $this->input->post('makanan_minuman');
			$this->m_menu_makanan->update_menu_makanan($this->input->post('id'), $data);
		}
		$data['get_makanan_pokok']		= $this->m_makanan_pokok->get_makanan_pokoks();
		$data['get_makanan_lauk_pauk']	= $this->m_makanan_lauk_pauk->get_makanan_lauk_pauks();
		$data['get_makanan_sayur']	 	= $this->m_makanan_sayur->get_makanan_sayurs();
		$data['get_makanan_buah']	 	= $this->m_makanan_buah->get_makanan_buahs();
		$data['get_makanan_minuman'] 	= $this->m_makanan_minuman->get_makanan_minumans();
		$data['menu_makanan']  			= $this->m_menu_makanan->get_menu_makanan_by_id($id);
		$this->render->view('admin/menu_pegawai_change', $data);

	}
	// End of menu function

	// Start of administrator function
	public function administrator($selector = '', $id = '')
	{
		switch ($selector) {
			case 'insert':
				$this->_insert_administrator();
				break;

			case 'edit':
				$data['get_administrator'] = $this->m_administrator->get_administrator_by_id($id);
				$this->render->view('admin/data_admin_edit', $data);
				break;

			case 'update':
				$this->_update_administrator();
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
		$id 			  = $this->input->post('id');
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

			case 'edit':
				$data['get_divisi'] = $this->m_divisi->get_divisi_by_id($id);
				$this->render->view('admin/data_divisi_edit', $data);
				break;

			case 'update':
				$this->_update_divisi();
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

	private function _update_divisi() {
		$id 				 = $this->input->post('id');
		$data['nama_divisi'] = $this->input->post('nama_divisi');
		
		$this->m_divisi->update_divisi($id, $data);

		redirect('admin/divisi/'.md5(time()));
	}
	// End of divisi function
}
