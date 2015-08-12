<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_makanan_buah extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}


	// Get all data in makanan_buah
	public function get_makanan_buahs()
	{
		$database = $this->db->select('*')
					->from('makanan_buah')
					->get()->result();

		return $database;
		// Result in Object
	}

	// Get all data makanan_buah in makanan_buah by ID
	public function get_makanan_buah_by_id($id = '0')
	{
		$database = $this->db->select('*')
					->from('makanan_buah')
					->where('id', $id)
					->get()->result();

		return $database[0];
		// Result in Object
	}
	
	// Inserting data makanan_buah to database
	public function insert_makanan_buah($data = array())
	{
		// $data['nama_makanan']
		// $data['kalori']
		$database = $this->db->insert('makanan_buah', $data);
		return $database;
	}

	// Updating all makanan_buah data By ID
	public function update_makanan_buah($id = 0, $data = array())
	{
		// $data['nama_makanan']
		// $data['kalori']
		if ($id != 0) {
			$database = $this->db->where('id', $id)
						->update('makanan_buah', $data);
		} else {
			$database = false;
		}

		return $database;
	}

	// Delete makanan_buah by ID
	public function delete_makanan_buah($id = 0)
	{
		if ($id != 0) {
			$database = $this->db->where('id', $id)
						->delete('makanan_buah');
		}
		return $database;
	}

}
