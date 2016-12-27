<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Musers extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getList()
	{
		return $this->db->get('users')->result();
	}

}

/* End of file Musers.php */
/* Location: ./application/models/Musers.php */