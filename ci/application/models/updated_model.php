
<?php
class updated_model extends CI_Model
{
 function __construct()
 {
 	parent::__construct();
 }
function select()
{
	$this->db->select();
	$this->db->from('bookss');

	$query= $this->db->get();

	return $query->result();
	
}

function fetch($id)
{
	$this->db->select();
	$this->db->from('bookss');
	$this->db->where('id',$id);
	$query = $this->db->get();

	if($query->num_rows() == 1)
	{
		return $query->result();
	}
}

function final1($id,$data)
{
	$this->db->where('id',$id);
	$this->db->update('bookss',$data);
  
}
function delete($id)
{
	$this->db->where('id',$id);
	$this->db->delete('bookss');
}

}



?>