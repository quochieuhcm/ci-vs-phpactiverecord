<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends ActiveRecord\Model {
	static $has_many = array(
		array('article', 'foreign_key' => 'created_by'),
	);
}

/* End of file Musers.php */
/* Location: ./application/models/Musers.php */