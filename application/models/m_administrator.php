<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_administrator extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}

	// Get all user data in administrator
	public function get_administrators()
	{
		$database = $this->db->select('*')
					->from('administrator')
					->get()->result();

		return $database;
		// Result in Object
	}

	// Get all data administrator in administrator by ID
	public function get_administrator_by_id($id = 0)
	{
		$database = $this->db->select('*')
					->from('administrator')
					->where('id', $id)
					->get()->result();

		return $database[0];
		// Result in Object
	}
	
	// Inserting data administrator to database
	public function insert_administrator($data = array())
	{
		// $data['username']
		// $data['password']
		// $data['nama']
		// $data['email']
		// $data['type'] = 'admin' / 'kantin' <- choose one

		$data['password'] = md5($data['password']);
		$database = $this->db->insert('administrator', $data);
		return $database;
	}

	// Updating all administrator data By ID
	public function update_administrator($id = 0, $data = array())
	{
		// $data['username']
		// $data['password']
		// $data['nama']
		// $data['email']
		// $data['type'] = 'admin' / 'kantin' <- choose one

		if (!empty($data['password'])) {
			$data['password'] = md5($data['password']);
		} else {
			unset($data['password']);
		}

		if ($id != 0) {
			$database = $this->db->where('id', $id)
						->update('administrator', $data);
		} else {
			$database = false;
		}

		return $database;
	}

	// Delete Administrator by ID
	public function delete_administrator($id = 0)
	{
		if ($id != 0) {
			$database = $this->db->where('id', $id)
						->delete('administrator');
		}
		return $database;
	}

	// Additional
	public function login($username, $password) {
		$database = $this->db->select('*')
					->from('administrator')
					->where('username', $username)
					->where('password', md5($password))
					->get()->num_rows();

		if ($database > 0) {
			$database = $this->db->select('*')
					->from('administrator')
					->where('username', $username)
					->where('password', md5($password))
					->get()->result();

			$data['username'] 	= $username;
			$data['role'] 		= $database[0]->type;

			$this->session->set_userdata($data);
		}
	}

	public function get_administrator_by_username()
	{
		$username = $this->session->userdata('username');
		$database = $this->db->select('*')
					->from('administrator')
					->where('username', $username)
					->get()->result();

		return $database[0];
		// Result in Object
	}

}
