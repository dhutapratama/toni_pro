<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_kalori extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}


	// Get all data in kalori
	public function get_kaloris()
	{
		$database = $this->db->select('*')
					->from('kebutuhan_kalori')
					->get()->result();

		return $database;
		// Result in Object
	}

	// Get all data kalori in kalori by ID
	public function get_kalori_by_id($id = '0')
	{
		$database = $this->db->select('*')
					->from('kebutuhan_kalori')
					->where('id', $id)
					->get()->result();

		return $database[0];
		// Result in Object
	}
	
	// Inserting data kalori to database
	public function insert_kalori($data = array())
	{
		// $data['id_user']
		// $data['kalori']
		$database = $this->db->insert('kebutuhan_kalori', $data);
		return $database;
	}

	// Updating all kalori data By ID
	public function update_kalori($data = array())
	{
		// $data['id_user']
		// $data['kalori']

		$username = $this->session->userdata('username');

		$pegawai = $this->db->select('*')
					->from('pegawai')
					->where('username', $username)
					->get()->result();

		$database = $this->db->select('*')
					->from('kebutuhan_kalori')
					->where('id_user', $pegawai[0]->id)
					->get();

		$data['id_user'] = $pegawai[0]->id;;

		if ($database->num_rows() > 0) {
			$kalori_awal = $database->result();
			$kalori_awal = $kalori_awal[0]->kalori;
			$database    = $this->db->where('id_user', $data['id_user'])
							->update('kebutuhan_kalori', $data);
		} else {
			$kalori_awal 	 = 0;
			
			$database 		 = $this->insert_kalori($data);
		}

		$data['notifikasi'] = " mengubah kalorinya dari " . $kalori_awal . " menjadi " . $data['kalori'];
		unset($data['kalori']);

		$this->m_notifikasi->insert_notifikasi($data);

		return $database;
	}

	// Delete kalori by ID
	public function delete_kalori($id = 0)
	{
		if ($id != 0) {
			$database = $this->db->where('id', $id)
						->delete('kebutuhan_kalori');
		}
		return $database;
	}

	// Additional
	// Get all data kalori in kalori by ID User
	public function get_kalori_by_username()
	{
		$username = $this->session->userdata('username');

		$pegawai = $this->db->select('*')
					->from('pegawai')
					->where('username', $username)
					->get()->result();

		$database = $this->db->select('*')
					->from('kebutuhan_kalori')
					->where('id_user', $pegawai[0]->id)
					->get();

		if ($database->num_rows() > 0) {
			$database = $database->result();
			return $database[0];
		} else {

			unset($database);
			$database[0] = (object) '';
			$database[0]->kalori = 0;
			return $database[0];
		}
		
		// Result in Object
	}

}
