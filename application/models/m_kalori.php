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
	public function update_kalori($id = 0, $data = array())
	{
		// $data['id_user']
		// $data['kalori']
		if ($id != 0) {
			$database = $this->db->where('id', $id)
						->update('kebutuhan_kalori', $data);
		} else {
			$database = false;
		}

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
	public function get_kalori_by_id_user($id_user = 0)
	{
		$database = $this->db->select('*')
					->from('kebutuhan_kalori')
					->where('id_user', $id_user)
					->get()->result();

		return $database;
		// Result in Object
	}

}
