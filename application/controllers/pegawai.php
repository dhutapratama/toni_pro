<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	// Start of index function
	public function index()
	{
		$id 							= $this->m_pegawai->get_pegawai_by_username()->id;
		$data['get_menu']				= $this->m_menu_makanan->get_menu_makanan_by_id_pegawai($id);
		$this->render->view('pegawai/home', $data);
	}
	// End of index function

	// Start of profil function
	public function profil($selector = '', $id = '')
	{
		switch ($selector) {
			case 'update':
				$this->_update_profil();
				break;

			default:
				$data['get_pegawai'] = $this->m_pegawai->get_pegawai_by_username();
				$this->render->view('pegawai/profil', $data);
				break;
		}
	}

	private function _update_profil() {
		$id 				  = $this->input->post('id');
		$data['berat_badan']  = $this->input->post('berat_badan');
		$data['tinggi_badan'] = $this->input->post('tinggi_badan');
		$data['umur']		  = $this->input->post('umur');
		$data['username']	  = $this->input->post('username');
		$data['password']	  = $this->input->post('password');
		$data['email']		  = $this->input->post('email');
		
		$this->m_pegawai->update_pegawai($id, $data);

		$pegawai = $this->m_pegawai->get_pegawai_by_username();

		if ($pegawai->jenis_kelamin == 'l') {
			if ($data['umur'] > 18 && $data['umur'] < 30) {
				$gizi_berat_badan = 56;
				$gizi_kalori = 2550;
			} elseif ($data['umur'] > 29 && $data['umur'] < 50) {
				$gizi_berat_badan = 62;
				$gizi_kalori = 2350;
			} else {
				$gizi_berat_badan = 62;
				$gizi_kalori = 2250;
			}
		} else {
			if ($data['umur'] > 18 && $data['umur'] < 30) {
				$gizi_berat_badan = 52;
				$gizi_kalori = 1900;
			} elseif ($data['umur'] > 29 && $data['umur'] < 50) {
				$gizi_berat_badan = 55;
				$gizi_kalori = 1800;
			} else {
				$gizi_berat_badan = 55;
				$gizi_kalori = 1750;
			}
		}

		if ($data['umur'] > 19 && $data['umur'] < 31) {
			$presentase = 100/100;
		} elseif ($data['umur'] > 30 && $data['umur'] < 41) {
			$presentase = 97/100;
		} elseif ($data['umur'] > 40 && $data['umur'] < 51) {
			$presentase = 94/100;
		} elseif ($data['umur'] > 50 && $data['umur'] < 61) {
			$presentase = 86.5/100;
		} elseif ($data['umur'] > 60 && $data['umur'] < 71) {
			$presentase = 79/100;
		} else {
			$presentase = 69/100;
		}

		$kalori_per_hari = ($data['berat_badan'] / $gizi_berat_badan) * $gizi_kalori;
		$penyesuaian_usia = $presentase * $kalori_per_hari;
		$kalori_ditempat_kerja = 40 / 100 * $penyesuaian_usia;
		$kalori_ditempat_kerja = round( $kalori_ditempat_kerja, 2, PHP_ROUND_HALF_UP);
		$kalori['kalori'] = $kalori_ditempat_kerja;
		
		$this->m_kalori->update_kalori($kalori);

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
				$data['get_kalori'] = $this->m_kalori->get_kalori_by_username();
				$this->render->view('pegawai/kalori', $data);
				break;
		}
	}

	private function _update_kalori() {
		$data['kalori'] = $this->input->post('kalori');
		
		$this->m_kalori->update_kalori($data);

		redirect('pegawai/kalori/'.md5(time()));
	}
	// End of profil function
	
}