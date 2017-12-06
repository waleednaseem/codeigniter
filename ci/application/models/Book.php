<?php

class book extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function book_insert($data)
	{
		$this->db->insert('bookss',$data);
	}
}


?>