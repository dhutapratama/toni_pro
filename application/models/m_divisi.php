<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_divisi extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}


	// Get all data in divisi
	public function get_divisis()
	{
		$database = $this->db->select('*')
					->from('divisi')
					->get()->result();

		return $database;
		// Result in Object
	}

	// Get all data divisi in divisi by ID
	public function get_divisi_by_id($id = '0')
	{
		$database = $this->db->select('*')
					->from('divisi')
					->where('id', $id)
					->get()->result();

		return $database;
		// Result in Object
	}
	
	// Inserting data divisi to database
	public function insert_divisi($data = array())
	{
		// $data['nama_divisi']
		$database = $this->db->insert('divisi', $data);
		return $database;
	}

	// Updating all divisi data By ID
	public function update_divisi($id = 0, $data = array())
	{
		// $data['nama_divisi']
		if ($id != 0) {
			$database = $this->db->where('id', $id)
						->update('divisi', $data);
		} else {
			$database = false;
		}

		return $database;
	}

	// Delete divisi by ID
	public function delete_divisi($id = 0)
	{
		if ($id != 0) {
			$database = $this->db->where('id', $id)
						->delete('divisi');
		}
		return $database;
	}

}
