<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class View_entry extends MY_Controller
{
    private $data;
    protected $before_filter = array(
        'action' => '_check_if_logged_in',
        'except' => array()
    );

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	function __construct()
    {
       parent::__construct();
     
     //$this->load->model('view_entry_model');
     $this->load->model('user_search_model');
  
    }
	
	
	 public function index() {
               $user_search_id = $this->uri->segment(3);
               $data['title_number_val'] = str_replace("%20"," ",$this->uri->segment(4));
               $data['query'] =   $this->db->get_where('user_search', array('user_search_id'=>$user_search_id));
               $data['listquery'] = $this->user_search_model->listItem();
               $this->load->view('view_entry',$data);

    }
}