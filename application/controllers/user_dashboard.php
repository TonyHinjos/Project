<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User_dashboard extends MY_Controller
{   
     protected $before_filter = array(
        'action' => '_check_if_logged_in',
        'except' => array()
    );
   // private $data;

    function index()
    {
    
        $this->load->view('user_dashboard');
    
    }
     
     public function make_application()
    {
        $this->load->view('make_application');
    }
    public function instructions()
    {
        $this->load->view('instructions');
    }
    public function search_form()
    {
        $this->load->view('search_form');
    }
    public function review_entry()
    {
        $this->load->view('review_entry');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */