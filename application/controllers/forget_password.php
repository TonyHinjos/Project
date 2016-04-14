<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Forget_password extends CI_Controller
{
 public function index()
    {
        /**
         * left blank.
         */

        /*
         * to do
         * add default login_page
        */
   
       $this->load->view('forget_password');
    }

public function forget()
	{
		if (isset($_GET['info'])) {
               $data['info'] = $_GET['info'];
              }
		if (isset($_GET['error'])) {
              $data['error'] = $_GET['error'];
              }
		
		$this->load->view('login-forget',$data);
	} 
	
}