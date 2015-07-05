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
					->get()->result();

		return $database[0];
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

		$data['password'] = md5($data['password']);
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

		if (isset($data['password'])) {
			$data['password'] = md5($data['password']);
		}

		if ($id != 0) {
			$database = $this->db->where("id", $id)
						->update("pegawai", $data);
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

}
