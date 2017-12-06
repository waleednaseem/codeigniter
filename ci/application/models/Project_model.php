
<?php

class Project_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();

	}

	function user_verify($username,$password)
	{
		$this->db->select();
		$this->db->from('user');
		$this->db->where('username',$username);
		$this->db->where('password',$password);

		$query = $this->db->get();

		          if($query -> num_rows() == 1)
		          {
		          	return $query->result_array($query);
		          }
		          else
		          {
		          	return false;
		          }

	
	}
	function book_insert($data)
	{
		$this->db->insert('user',$data);
		return "added successfuly";

	}


	
}
?>