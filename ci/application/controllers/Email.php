
<?php

class Email extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
	}

	function index()
       {
	  $this->load->view('Contact');
      }

    function sent()
      {
	$name =$this->input->post('name');
	$from =$this->input->post('from');
	$subject =$this->input->post('subject');
	$message =$this->input->post('message');

	//configure email settings 
	$config['protocol']='smtp';
	$config['smtp_host']='ssl:/gmail.smtp.com';
	$config['smtp_port']=465;
	$config['smtp_user']='admin@admin.com';
	$config['smtp_pass']='admin';

	$this->load->library('Email',$config);

	$this->email->from($from,$name);
	$this->email->to('admin@admin.com');
	$this->email->message($message);
		if($this->email->send())
		{

			$data['message']='Email sended';

		}
		else
		{
			$data['message']='Email not send';
		}


      }


}




?>