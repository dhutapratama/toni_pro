<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_makanan_minuman extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}


	// Get all data in makanan_minuman
	public function get_makanan_minumans()
	{
		$database = $this->db->select('*')
					->from('makanan_minuman')
					->get()->result();

		return $database;
		// Result in Object
	}

	// Get all data makanan_minuman in makanan_minuman by ID
	public function get_makanan_minuman_by_id($id = '0')
	{
		$database = $this->db->select('*')
					->from('makanan_minuman')
					->where('id', $id)
					->get()->result();

		return $database[0];
		// Result in Object
	}
	
	// Inserting data makanan_minuman to database
	public function insert_makanan_minuman($data = array())
	{
		// $data['nama_makanan']
		$database = $this->db->insert('makanan_minuman', $data);
		return $database;
	}

	// Updating all makanan_minuman data By ID
	public function update_makanan_minuman($id = 0, $data = array())
	{
		// $data['nama_makanan']
		if ($id != 0) {
			$database = $this->db->where('id', $id)
						->update('makanan_minuman', $data);
		} else {
			$database = false;
		}

		return $database;
	}

	// Delete makanan_minuman by ID
	public function delete_makanan_minuman($id = 0)
	{
		if ($id != 0) {
			$database = $this->db->where('id', $id)
						->delete('makanan_minuman');
		}
		return $database;
	}

}
