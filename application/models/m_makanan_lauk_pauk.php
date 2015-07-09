<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_makanan_lauk_pauk extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}


	// Get all data in makanan_lauk_pauk
	public function get_makanan_lauk_pauks()
	{
		$database = $this->db->select('*')
					->from('makanan_lauk_pauk')
					->get()->result();

		return $database;
		// Result in Object
	}

	// Get all data makanan_lauk_pauk in makanan_lauk_pauk by ID
	public function get_makanan_lauk_pauk_by_id($id = '0')
	{
		$database = $this->db->select('*')
					->from('makanan_lauk_pauk')
					->where('id', $id)
					->get()->result();

		return $database[0];
		// Result in Object
	}
	
	// Inserting data makanan_lauk_pauk to database
	public function insert_makanan_lauk_pauk($data = array())
	{
		// $data['nama_makanan']
		$database = $this->db->insert('makanan_lauk_pauk', $data);
		return $database;
	}

	// Updating all makanan_lauk_pauk data By ID
	public function update_makanan_lauk_pauk($id = 0, $data = array())
	{
		// $data['nama_makanan']
		if ($id != 0) {
			$database = $this->db->where('id', $id)
						->update('makanan_lauk_pauk', $data);
		} else {
			$database = false;
		}

		return $database;
	}

	// Delete makanan_lauk_pauk by ID
	public function delete_makanan_lauk_pauk($id = 0)
	{
		if ($id != 0) {
			$database = $this->db->where('id', $id)
						->delete('makanan_lauk_pauk');
		}
		return $database;
	}

}
