<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_notifikasi extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}


	// Get all data in notifikasi
	public function get_notifikasis()
	{
		$database = $this->db->select('*')
					->from('notifikasi')
					->get()->result();

		return $database;
		// Result in Object
	}

	// Get all data notifikasi in notifikasi by ID
	public function get_notifikasi_by_id($id = '0')
	{
		$database = $this->db->select('*')
					->from('notifikasi')
					->where('id', $id)
					->get()->result();

		return $database;
		// Result in Object
	}
	
	// Inserting data notifikasi to database
	public function insert_notifikasi($data = array())
	{
		// $data['notifikasi']
		// $data['id_user']

		$database = $this->db->insert('notifikasi', $data);
		return $database;
	}

	// Updating all notifikasi data By ID
	public function update_notifikasi($id = 0, $data = array())
	{
		// $data['notifikasi']
		// $data['id_user']

		if ($id != 0) {
			$database = $this->db->where('id', $id)
						->update('notifikasi', $data);
		} else {
			$database = false;
		}

		return $database;
	}

	// Delete notifikasi by ID
	public function delete_notifikasi($id = 0)
	{
		if ($id != 0) {
			$database = $this->db->where('id', $id)
						->delete('notifikasi');
		}
		return $database;
	}

}
