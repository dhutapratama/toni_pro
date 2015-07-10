<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_makanan_pokok extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}


	// Get all data in makanan_pokok
	public function get_makanan_pokoks()
	{
		$database = $this->db->select('*')
					->from('makanan_pokok')
					->get()->result();

		return $database;
		// Result in Object
	}

	// Get all data makanan_pokok in makanan_pokok by ID
	public function get_makanan_pokok_by_id($id = '0')
	{
		$database = $this->db->select('*')
					->from('makanan_pokok')
					->where('id', $id)
					->get();

		if ($database->num_rows() > 0) {
			$database = $database->result();
			return $database[0];
		} else {
			return array();
		}
		// Result in Object
	}
	
	// Inserting data makanan_pokok to database
	public function insert_makanan_pokok($data = array())
	{
		// $data['nama_makanan']
		$database = $this->db->insert('makanan_pokok', $data);
		return $database;
	}

	// Updating all makanan_pokok data By ID
	public function update_makanan_pokok($id = 0, $data = array())
	{
		// $data['nama_makanan']
		if ($id != 0) {
			$database = $this->db->where('id', $id)
						->update('makanan_pokok', $data);
		} else {
			$database = false;
		}

		return $database;
	}

	// Delete makanan_pokok by ID
	public function delete_makanan_pokok($id = 0)
	{
		if ($id != 0) {
			$database = $this->db->where('id', $id)
						->delete('makanan_pokok');
		}
		return $database;
	}

}
