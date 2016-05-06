<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Manage_applications extends MY_Controller
{
    private $data;
    protected $before_filter = array(
        'action' => '_check_if_logged_in',
        'except' => array()
    );
    
    function __construct()
    {
       parent::__construct();
     $this->load->model('manage_applications_model');
       
    }

	
    

    public function index()
    {  
         $data['applications']=$this->manage_applications_model->get_applications();
        $this->load->view('manage_applications',$data);
    }
}