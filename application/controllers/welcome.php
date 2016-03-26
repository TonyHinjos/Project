<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller
{   
     private $data;
    protected $before_filter = array(
        'action' => '_check_if_logged_in',
        'except' => array()
    );
    

    public function index()
    {
        //$this->load->view('welcome_message');
        redirect(base_url() . "user_dashboard");
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */