
<?php
  class Update extends CI_Controller
  {
  	function __construct()
  	{
  		parent::__construct();
       $this->load->helper(array('html','url'));
       $this->load->library('table');
       $this->load->model('updated_model');
  	}

  	function index()
  	{
  		$this->table->set_heading('books','author name','edit','delete');

  		$template =array(
  			'table_open'=>'<table border="1" cellpadding="4">'
  			);
  		$this->table->set_template($template);
  			
  		
  		$answer =$this->updated_model->select();

  		foreach($answer as $row)
  		{
        $del = anchor(base_url().'Update_form/delete_function/'.$row->id,'delete');
        $link = anchor(base_url().'Update_form/update_function/'.$row->id,'Edit');
        $this->table->add_row($row->name,$row->Author,$link,$del);


  		}
  		echo $this->table->generate();
     
  		
  	}

  	function update_data()
  	{
  		$id =$this->input->post('id');
  		$data =array(
  			'name'=> $this->input->post('book'),
  			'author'=> $this->input->post('author')
  			         );
          $this->updated_model->final1($id,$data);
          $this->index();

  	}

  }




?>