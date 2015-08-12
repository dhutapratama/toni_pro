<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_makanan_sayur extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}

	// Get all data in makanan_sayur
	public function get_makanan_sayurs()
	{
		$database = $this->db->select('*')
					->from('makanan_sayur')
					->get()->result();

		return $database;
		// Result in Object
	}

	// Get all data makanan_sayur in makanan_sayur by ID
	public function get_makanan_sayur_by_id($id = '0')
	{
		$database = $this->db->select('*')
					->from('makanan_sayur')
					->where('id', $id)
					->get()->result();

		return $database[0];
		// Result in Object
	}
	
	// Inserting data makanan_sayur to database
	public function insert_makanan_sayur($data = array())
	{
		// $data['nama_makanan']
		// $data['kalori']
		$database = $this->db->insert('makanan_sayur', $data);
		return $database;
	}

	// Updating all makanan_sayur data By ID
	public function update_makanan_sayur($id = 0, $data = array())
	{
		// $data['nama_makanan']
		// $data['kalori']
		if ($id != 0) {
			$database = $this->db->where('id', $id)
						->update('makanan_sayur', $data);
		} else {
			$database = false;
		}

		return $database;
	}

	// Delete makanan_sayur by ID
	public function delete_makanan_sayur($id = 0)
	{
		if ($id != 0) {
			$database = $this->db->where('id', $id)
						->delete('makanan_sayur');
		}
		return $database;
	}

}
