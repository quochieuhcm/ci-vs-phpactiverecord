<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends ActiveRecord\Model {
	static $foreign_key = array('created_by');
	static $belongs_to  = array(
		array('user')
	);
}

/* End of file Aritcle.php */
/* Location: ./application/models/Aritcle.php */