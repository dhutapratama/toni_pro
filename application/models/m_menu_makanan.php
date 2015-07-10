<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_menu_makanan extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}


	// Get all data in menu_makanan
	public function get_menu_makanans()
	{
		$database = $this->db->select('*')
					->from('menu_makanan')
					->get()->result();

		return $database;
		// Result in Object
	}

	// Get all data menu_makanan in menu_makanan by ID
	public function get_menu_makanan_by_id($id = '0')
	{
		$database = $this->db->select('*')
					->from('menu_makanan')
					->where('id', $id)
					->get()->result();

		return $database;
		// Result in Object
	}
	
	// Inserting data menu_makanan to database
	public function insert_menu_makanan($data = array())
	{
		// $data['id_user']
		// $data['id_makanan_pokok'] array('id_1', id_2)
		// $data['id_makanan_lauk_pauk'] array('id_1', id_2)
		// $data['id_makanan_sayur'] array('id_1', id_2)
		// $data['id_makanan_buah'] array('id_1', id_2)
		// $data['id_minuman'] array('id_1', id_2)

		$data['id_makanan_pokok']     = serialize($data['id_makanan_pokok']);
		$data['id_makanan_lauk_pauk'] = serialize($data['id_makanan_lauk_pauk']);
		$data['id_makanan_sayur']     = serialize($data['id_makanan_sayur']);
		$data['id_makanan_buah']      = serialize($data['id_makanan_buah']);
		$data['id_minuman']           = serialize($data['id_minuman']);

		$database = $this->db->insert('menu_makanan', $data);
		return $database;
	}

	// Updating all menu_makanan data By ID
	public function update_menu_makanan($id = 0, $data = array())
	{
		// $data['id_user']
		// $data['id_makanan_pokok'] array('id_1', id_2)
		// $data['id_makanan_lauk_pauk'] array('id_1', id_2)
		// $data['id_makanan_sayur'] array('id_1', id_2)
		// $data['id_makanan_buah'] array('id_1', id_2)
		// $data['id_minuman'] array('id_1', id_2)

		$data['id_user']			  = serialize($data['id_user']);
		$data['id_makanan_pokok']     = serialize($data['id_makanan_pokok']);
		$data['id_makanan_lauk_pauk'] = serialize($data['id_makanan_lauk_pauk']);
		$data['id_makanan_sayur']     = serialize($data['id_makanan_sayur']);
		$data['id_makanan_buah']      = serialize($data['id_makanan_buah']);
		$data['id_minuman']           = serialize($data['id_minuman']);
		
		if ($id != 0) {
			$database = $this->db->where('id', $id)
						->update('menu_makanan', $data);
		} else {
			$database = false;
		}

		return $database;
	}

	// Delete menu_makanan by ID
	public function delete_menu_makanan($id = 0)
	{
		if ($id != 0) {
			$database = $this->db->where('id', $id)
						->delete('menu_makanan');
		}
		return $database;
	}

	// Additional
	// Count menu_makanan by id_pegawai
	public function count_menu_makanan_by_id_pegawai($id_pegawai = '0')
	{
		$database = $this->db->select('*')
					->from('menu_makanan')
					->where('id_user', $id_pegawai)
					->get()->num_rows();

		return $database;
		// Result in Object
	}

	public function get_menu_makanan_by_id_pegawai($id_pegawai = '0')
	{
		$database = $this->db->select('*')
					->from('menu_makanan')
					->where('id_user', $id_pegawai)
					->get()->result();

		return $database;
		// Result in Object
	}

}
