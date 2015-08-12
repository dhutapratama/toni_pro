<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_kategori_pekerjaan extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}

	// Get all data in kategori_pekerjaan
	public function get_kategori_pekerjaans()
	{
		$database = $this->db->select('*')
					->from('kategori_pekerjaan')
					->get()->result();

		return $database;
		// Result in Object
	}

	// Get all data kategori_pekerjaan in kategori_pekerjaan by ID
	public function get_kategori_pekerjaan_by_id($id = 0)
	{
		$database = $this->db->select('*')
					->from('kategori_pekerjaan')
					->where('id', $id)
					->get();

		if ($database->num_rows() > 0) {
			$database = $database->result();
			return $database[0];
		} else {
			$database = (object) '';
			$database->nama_kategori_pekerjaan = 'null';
			return $database;
		}
		
		// Result in Object
	}
	
	// Inserting data kategori_pekerjaan to database
	public function insert_kategori_pekerjaan($data = array())
	{
		// $data['nama_kategori_pekerjaan']
		// $data['poin']
		$database = $this->db->insert('kategori_pekerjaan', $data);
		return $database;
	}

	// Updating all kategori_pekerjaan data By ID
	public function update_kategori_pekerjaan($id = 0, $data = array())
	{
		// $data['nama_kategori_pekerjaan']
		// $data['poin']
		if ($id != 0) {
			$database = $this->db->where('id', $id)
						->update('kategori_pekerjaan', $data);
		} else {
			$database = false;
		}

		return $database;
	}

	// Delete kategori_pekerjaan by ID
	public function delete_kategori_pekerjaan($id = 0)
	{
		if ($id != 0) {
			$database = $this->db->where('id', $id)
						->delete('kategori_pekerjaan');
		}
		return $database;
	}

}
