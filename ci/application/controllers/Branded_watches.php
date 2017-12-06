
<?php
 class Branded_Watches extends CI_Controller
{
function __construct(){
	parent::__construct();
	$this->load->model('Project_model');
	
}
         function index()
         {
         	      if($this->session->userdata('username') !=null)
                   {
         	         echo $this->session->userdata('username');
         	         return redirect('Branded_Watches/watches');
         
         	
                    }
                     else
                         { 
                         	return redirect('Branded_Watches/Login_page');
         	
                         }
                        
         }

  	     function watches()
  	     {
  	     	if($this->session->userdata('username') !=null)
  	     	{
  	     		$this->load->view('branded');
  	     	}
  	     	else
  	     	{
  	     		echo "please login first";
  	     	}
  	     }

         function formRegister()
            { 
            //from validations 
              $this->form_validation->set_rules('First_name','First name','required');
              $this->form_validation->set_rules('Last_name','Last name','required');
              $this->form_validation->set_rules('user_name','user name','required');
              $this->form_validation->set_rules('email','Email','required');
              $this->form_validation->set_rules('user_password','Password','required');
              $this->form_validation->set_rules('confirm_password','Password','matches[user_password]|required');
              $this->form_validation->set_error_delimiters('<div class="alert-danger">','</div>');


              if($this->form_validation->run() )
              {
                if($_POST)
              {
                $data = array(

                  'Firstname'=>$this->input->post('First_name'),
                  'Lastname'=>$this->input->post('Last_name'),
                  'username'=>$this->input->post('user_name'),
                  'email'=>$this->input->post('email'),
                  'password'=>$this->input->post('user_password')
                  
                  );
                 $this->Project_model->book_insert($data);
                 return redirect('Branded_Watches/Login_page');
              }

              }
              else{
                $this->load->view('signup_page');
              }
            }


  	     function contactus()
  	     {
  	     	if($this->session->userdata('username') !=null)
  	     	{
  	     	$this->load->view('contactus');	
  	     	}
  	     	else
  	     	{
  	     		echo "please login first";
  	     	}
  	     	
  	     }
  	     function Aboutus()
  	     {
  	     	if($this->session->userdata('username') !=null){
  	     	$this->load->view('Aboutus');
  	     }
  	     else
  	     {
  	     	echo "please login first";
  	     }
  	     }
  	     
  	     function Login_page()
  	     {   
  	     	$this->load->view('Project_login');

  	     	
             

              if($_POST)
              {
                 $this->form_validation->set_rules('username','Username','required');
              $this->form_validation->set_rules('password','Password','required');
              $this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');
               
              if($this->form_validation->run())
              {
                 if($this->session->userdata('username') !=null)
                    {
                      return redirect('Branded_Watches/watches');

                    }
              }
              else
              {
              return redirect('Branded_Watches/Project_login');
             
              
              }
            }
          }


  	     	
  	     	

  	     


  	     function Login()
  	     {

            

  	     //wait
  	     	$username =$this->input->post('username');
  	     	$password =$this->input->post('password');

  	     	$answer = $this->Project_model->user_verify($username,$password);

  	     	    if($answer)
  	     	    {
  	     	    	 
  	     	    	$data = array(
  	     	    		'username' => $answer[0]['username']
  	     	    		);

  	     	    	 $this->session->set_userdata($data,'session');
  	     	    	 return redirect('Branded_Watches/watches');
  	     	    }
  	     	    else
  	     	    {
  	     	    	
  	     	        return redirect('Branded_Watches/Login_page');

  	     	    }

  	     }
  	     function logout()
	     {
		   $this->session->unset_userdata('username','session');

		     echo('logout successfully');
		     $this->load->view('Project_login');

	      }
        function signup_page()
        {
           $this->load->view('signup_page');
        }



        function blancpain()
        {
          $this->load->view('watches_page/blancpain');
        }
        function chopard()
        {
          $this->load->view('watches_page/chopard');
        }
        function jaeger()
        {
          $this->load->view('watches_page/jaeger-LeCoultre');
        }
        function omega()
        {
          $this->load->view('watches_page/omega');
        }
        function rado()
        {
          $this->load->view('watches_page/rado');
        }
        function rolex()
        {
          $this->load->view('watches_page/rolex');
        }
        function Taghueuer()
        {
          $this->load->view('watches_page/Taghueuer');
        }
        function Vacheron()
        {
          $this->load->view('watches_page/VacheronConstantin');
        }
        function Zenith()
        {
          $this->load->view('watches_page/Zenith');
        }

        function test12()
        {
          $this->load->view('test123');
        }
}
?>