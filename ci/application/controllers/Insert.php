
<?php

class Insert extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','html'));
		$this->load->model('Book');
		
	}

	public function index()
	{
       $this->load->view('insert_record');
	}

	function submitted()
	{
	if($_POST)	
                 {  
                  $data = array(
                 'name'   =>  $this->input->post('name'),
		 'author' =>  $this->input->post('author')
		       );
		 
		  echo $this->Book->book_insert($data);

		  $this->index();
		}
	else
	{
		$this->load->view('insert_record');
	}

}
	
	
}


?>