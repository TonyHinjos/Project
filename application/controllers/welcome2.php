<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome2 extends MY_Controller
{
    protected $before_filter = array(
        'action' => '_check_if_logged_in',
        'except' => array()
    );
    private $data;

    public function index()
    {
        //$this->load->view('welcome_message2');
        redirect(base_url() . "browse_products");
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */