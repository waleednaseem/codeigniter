
<?php
class Cart extends CI_Controller
{
function __construct(){
	parent::__construct();
	$this->load->helper(array('url','form'));
	$this->load->library('cart');
}
 function index()
{
	$data['products']= array(

		 array(
		 	'id'=> 'abc',
		 	'name'=> 'glass',
		 	'price'=> 32,
		 	'qty'=>1

		 	),
		 array(
		 	'id' => 'smfn',
		 	'name'=> 'watch',
		 	'price'=> 60,
            'qty'=>1,
		 	),
		 array(
		 	'id' => 'ghi',
		 	'name'=> 'shirt',
		 	'price'=> 80,
            'qty'=>1
		 	)

		);

	if($this->input->get('del') !='')
	{
		$del=$this->input->get('del');
		$this->cart->remove($del);

	}
	if($this->input->get('id') !='')
	{
		$this->cart->insert($data['products'][$this->input->get('id')]);

	}
	 if($this->input->post('submit') !='')
            {
            	unset($_POST['submit']);

            	$contents =$this->input->post();

            	foreach($contents as $content)
            	{
            		$info = array(
            			'rowid' => $content['rowid'],
            			'qty'=> $content['qty']
            			);
            		$this->cart->update($info);


            	}

            }
            $this->load->view('cart_view',$data);
 }            
}

?>