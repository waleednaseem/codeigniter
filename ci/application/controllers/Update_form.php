
<?php

class Update_form extends CI_Controller
{

function __construct()
  	{
  		parent::__construct();
       $this->load->helper(array('html','url','form'));
       $this->load->model('updated_model');
  	}


function update_function($id)
 {
	echo heading('update area',2);

	$manali = $this->updated_model->fetch($id);
    
    foreach ($manali as $row) 
	{
	    echo form_open('Update/update_data');

	    echo form_hidden('id',$row->id);
	    
		echo form_label('Book','book');
		echo form_input('book',$row->name);
		
		echo form_label('Author','author');
		echo form_input('author',$row->Author);
		
		echo form_submit('submit','Update');
		echo form_close();

	
}





  }
  function delete_function($id)
  {
  	$this->updated_model->delete($id);
  	

  }

}

?>