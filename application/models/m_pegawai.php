<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_pegawai extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}

	// Get all user data in pegawai
	public function get_pegawais()
	{
		$database = $this->db->select("*")
					->from("pegawai")
					->get()->result();

		return $database;
		// Result in Object
	}

	// Get all data pegawai in pegawai by ID
	public function get_pegawai_by_id($id = 0)
	{
		$database = $this->db->select("*")
					->from("pegawai")
					->where('id', $id)
					->get();

		if ($database->num_rows() > 0) {
			$database = $database->result();
			return $database[0];
		} else {
			$database = array();
		}
		// Result in Object
	}
	
	// Inserting data pegawai to database
	public function insert_pegawai($data = array())
	{
		// $data['nomor_induk']
		// $data['nama']
		// $data['jenis_kelamin'] = "l" / "p" <- choose one
		// $data['berat_badan']
		// $data['tinggi_badan']
		// $data['umur']
		// $data['id_divisi']
		// $data['username']
		// $data['password']
		// $data['email']
		// $data['kode_pedaftaran']

		$search = 1;
		while($search > 0) {
			$data['kode_pendaftaran'] = $this->_kode_pendaftaran();

			$search = $this->db->select('*')
					->from('pegawai')
					->where('kode_pendaftaran', $data['kode_pendaftaran'])
					->get()->num_rows();
		}

		if (isset($data['password'])) {
			$data['password'] = md5($data['password']);
		}
		
		$database = $this->db->insert('pegawai', $data);
		return $database;
	}

	// Updating all pegawai data By ID
	public function update_pegawai($id = 0, $data = array())
	{
		// $data['nomor_induk']
		// $data['nama']
		// $data['jenis_kelamin'] = "l" / "p" <- choose one
		// $data['berat_badan']
		// $data['tinggi_badan']
		// $data['umur']
		// $data['id_divisi']
		// $data['username']
		// $data['password']
		// $data['email']

		if (!empty($data['password'])) {
			$data['password'] = md5($data['password']);
		} else {
			unset($data['password']);
		}

		if ($id != 0) {
			$this->db->where("id", $id);
			$database = $this->db->update("pegawai", $data);
		} else {
			$database = false;
		}

		return $database;
	}

	// Delete pegawai by ID
	public function delete_pegawai($id = 0)
	{
		if ($id != 0) {
			$database = $this->db->where('id', $id)
						->delete('pegawai');
		}
		return $database;
	}

	// Additional
	public function login($username, $password) {
		$database = $this->db->select('*')
					->from('pegawai')
					->where('username', $username)
					->where('password', md5($password))
					->get()->num_rows();

		if ($database > 0) {

			$data['username'] 	= $username;
			$data['role'] 		= 'pegawai';

			$this->session->set_userdata($data);
		}
	}

	// Get all data pegawai in pegawai by username
	public function get_pegawai_by_username()
	{
		$username = $this->session->userdata('username');
		$database = $this->db->select("*")
					->from("pegawai")
					->where('username', $username)
					->get()->result();

		return $database[0];
		// Result in Object
	}

	// Random kode pendaftaran
	private function _kode_pendaftaran() {
		return rand(10000, 99999);
	}

	// Get pegawai by nomor_pendaftaran
	public function get_pegawai_by_kode_pendaftaran() {
		$kode_pendaftaran = $this->input->post('kode_pendaftaran');
		$database = $this->db->select("*")
					->from("pegawai")
					->where('kode_pendaftaran', $kode_pendaftaran)
					->get()->result();
		return $database[0];
	}

	public function reset_password_pegawai($id = 0)
	{
		switch ($id) {
			case 'all':
				$database = $this->db->get('pegawai')->result();

				foreach ($database as $key => $value) {
					if($value->kode_pendaftaran != 'active') {
						$data['kode_pendaftaran'] = $this->_kode_pendaftaran();
						$this->db->where('id', $value->id);
						$this->db->update('pegawai', $data);
					}
				}

				break;
			
			default:
				$data['kode_pendaftaran'] = $this->_kode_pendaftaran();

				if ($id != 0) {
					$this->db->where("id", $id);
					$database = $this->db->update("pegawai", $data);
				} else {
					$database = false;
				}
				break;
		}
		
		return $database;
	}

	public function reset_password($data = array()) {
		if ($data['email'] != '') {
			$database = $this->db->select('*')
						->from('pegawai')
						->where('email', $data['email'])
						->get()->num_rows();

			if($database > 0) {
				$meta['reset_url'] = md5(time());
				$data['pesan'] = 'Link Ganti Password : <a href="'.site_url('home/reset_password/'.$meta['reset_url']).'">'.site_url('home/reset_password/'.$meta['reset_url']).'</a>';
				$this->_send_email($data);

				$this->db->where('email', $data['email']);
				$this->db->update('pegawai', $meta);

				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

	private function _send_email($data = array()) {
		$this->load->library('email');
		$this->load->config('smtp');

        $config['protocol']    = 'smtp';
        $config['smtp_host']    = $this->config->item('hostname');
        $config['smtp_port']    = $this->config->item('port_num');
        $config['smtp_timeout'] = '7';
        $config['smtp_user']    = $this->config->item('username'); // Alamat Email
        $config['smtp_pass']    = $this->config->item('password'); // Password Email
        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'html'; // or html
        $config['validation'] = TRUE; // bool whether to validate email or not 
        
        $this->email->initialize($config);
        $this->email->from($this->config->item('username'), $this->config->item('fromname'));
        $this->email->to($data['email']);

        $this->email->subject($this->config->item('subject'));
        $this->email->message($data['pesan']);

        $this->email->send();
	}

	public function check_reset_url($reset_url = '') {
		$database = $this->db->select('*')
					->from('pegawai')
					->where('reset_url', $reset_url)
					->get();

		if ($database->num_rows() > 0) {
			$database = $database->result();
			return $database[0];
		} else {
			return false;
		}
	}

}
