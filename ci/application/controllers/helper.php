<?php

class helper extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','html','form'));
	}
	public function index()
	{

	$this->load->view('helper.php');	
	}
}




?>