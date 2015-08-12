<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_posisi_badan extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}

	// Get all data in posisi_badan
	public function get_posisi_badans()
	{
		$database = $this->db->select('*')
					->from('posisi_badan')
					->get()->result();

		return $database;
		// Result in Object
	}

	// Get all data posisi_badan in posisi_badan by ID
	public function get_posisi_badan_by_id($id = 0)
	{
		$database = $this->db->select('*')
					->from('posisi_badan')
					->where('id', $id)
					->get();

		if ($database->num_rows() > 0) {
			$database = $database->result();
			return $database[0];
		} else {
			$database = (object) '';
			$database->nama_posisi_badan = 'null';
			return $database;
		}
		// Result in Object
	}
	
	// Inserting data posisi_badan to database
	public function insert_posisi_badan($data = array())
	{
		// $data['nama_posisi_badan']
		// $data['poin']
		$database = $this->db->insert('posisi_badan', $data);
		return $database;
	}

	// Updating all posisi_badan data By ID
	public function update_posisi_badan($id = 0, $data = array())
	{
		// $data['nama_posisi_badan']
		// $data['poin']
		if ($id != 0) {
			$database = $this->db->where('id', $id)
						->update('posisi_badan', $data);
		} else {
			$database = false;
		}

		return $database;
	}

	// Delete posisi_badan by ID
	public function delete_posisi_badan($id = 0)
	{
		if ($id != 0) {
			$database = $this->db->where('id', $id)
						->delete('posisi_badan');
		}
		return $database;
	}

}
