<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_pegawai extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}

	// Get all user data in pegawai
	public function get_pegawais()
	{
		$database = $this->db->select("*")
					->from("pegawai")
					->get()->result();

		return $database;
		// Result in Object
	}

	// Get all data pegawai in pegawai by ID
	public function get_pegawai_by_id($id = 0)
	{
		$database = $this->db->select("*")
					->from("pegawai")
					->where('id', $id)
					->get();

		if ($database->num_rows() > 0) {
			$database = $database->result();
			return $database[0];
		} else {
			$database = array();
		}
		// Result in Object
	}
	
	// Inserting data pegawai to database
	public function insert_pegawai($data = array())
	{
		// $data['nomor_induk']
		// $data['nama']
		// $data['jenis_kelamin'] = "l" / "p" <- choose one
		// $data['berat_badan']
		// $data['tinggi_badan']
		// $data['umur']
		// $data['id_divisi']
		// $data['username']
		// $data['password']
		// $data['email']
		// $data['kode_pedaftaran']

		$search = 1;
		while($search > 0) {
			$data['kode_pendaftaran'] = $this->_kode_pendaftaran();

			$search = $this->db->select('*')
					->from('pegawai')
					->where('kode_pendaftaran', $data['kode_pendaftaran'])
					->get()->num_rows();
		}

		if (isset($data['password'])) {
			$data['password'] = md5($data['password']);
		}
		
		$database = $this->db->insert('pegawai', $data);
		return $database;
	}

	// Updating all pegawai data By ID
	public function update_pegawai($id = 0, $data = array())
	{
		// $data['nomor_induk']
		// $data['nama']
		// $data['jenis_kelamin'] = "l" / "p" <- choose one
		// $data['berat_badan']
		// $data['tinggi_badan']
		// $data['umur']
		// $data['id_divisi']
		// $data['username']
		// $data['password']
		// $data['email']

		if (!empty($data['password'])) {
			$data['password'] = md5($data['password']);
		} else {
			unset($data['password']);
		}

		if ($id != 0) {
			$this->db->where("id", $id);
			$database = $this->db->update("pegawai", $data);
		} else {
			$database = false;
		}

		return $database;
	}

	// Delete pegawai by ID
	public function delete_pegawai($id = 0)
	{
		if ($id != 0) {
			$database = $this->db->where('id', $id)
						->delete('pegawai');
		}
		return $database;
	}

	// Additional
	public function login($username, $password) {
		$database = $this->db->select('*')
					->from('pegawai')
					->where('username', $username)
					->where('password', md5($password))
					->get()->num_rows();

		if ($database > 0) {

			$data['username'] 	= $username;
			$data['role'] 		= 'pegawai';

			$this->session->set_userdata($data);
		}
	}

	// Get all data pegawai in pegawai by username
	public function get_pegawai_by_username()
	{
		$username = $this->session->userdata('username');
		$database = $this->db->select("*")
					->from("pegawai")
					->where('username', $username)
					->get()->result();

		return $database[0];
		// Result in Object
	}

	// Random kode pendaftaran
	private function _kode_pendaftaran() {
		return rand(10000, 99999);
	}

	// Get pegawai by nomor_pendaftaran
	public function get_pegawai_by_kode_pendaftaran() {
		$kode_pendaftaran = $this->input->post('kode_pendaftaran');
		$database = $this->db->select("*")
					->from("pegawai")
					->where('kode_pendaftaran', $kode_pendaftaran)
					->get()->result();
		return $database[0];
	}

}
