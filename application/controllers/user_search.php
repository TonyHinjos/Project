<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_search extends MY_Controller
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
     $this->load->model('user_search_model');
     $this->load->model('title_search_model');
  
    }
	
	// public function review_entry()
	// {
	// 	 $this->load->view('review_entry');
	// }
	 public function review_entry() {

        $data['search'] = $this->user_search_model->show_current_search();
        $this->load->view('review_entry',$data);

    }
    
    
     
	
	    
	public function index(){
		$title_number=$this->input->post('title_number');
		$parcel_number=$this->input->post('parcel_number');
		$purpose=$this->input->post('purpose');
		$user_id=$this->session->userdata('user_id');
		$mobile_no=$this->session->userdata('mobile_no');
		$title_search_id=$this->title_search_model->get_title_search_id_given_title_number($title_number);
		$timestamp=date('Y-m-d h:i:sa'); 
	

		$my_array= array(
			'title_number'=>$title_number,
			'parcel_number'=>$parcel_number,
			'purpose'=>$purpose,
			'user_id'=>$user_id,
			'mobile_no'=>$mobile_no,
			'title_search_id'=>$title_search_id,
			'date'=>$timestamp);

		 $this->user_search_model->add_current_search($my_array);
		 $this->review_entry();

	}

	


	 public function delete_data($id){	 	 
		$this->update_stocks_model->delete_current_data($id);
		$this->show_current_stock();
	 }
	 function do_edit(){
        
                $user_search_id=$this->input->post('user_search_id');
	            $title_number=$this->input->post('title_number');
		        $parcel_number=$this->input->post('parcel_number');
	            $purpose=$this->input->post('purpose');
	            $timestamp=date('Y-m-d h:i:sa'); 
	
	            $title_search_id=$this->title_search_model->get_title_search_id_given_title_number($title_number);
                //$date = $this->input->post('date');
                
                $data['query']=$this->user_search_model->do_edit($user_search_id,$title_number,$parcel_number,$purpose,$title_search_id);

                 $this->load->view('review_2',$data);
            }

	
    function edit(){
               $user_search_id = $this->uri->segment(3);
               $data['title_number_val'] = str_replace("%20"," ",$this->uri->segment(4));
               $data['query'] =   $this->db->get_where('user_search', array('user_search_id'=>$user_search_id));
               $data['listquery'] = $this->user_search_model->listItem();
               $this->load->view('update_search',$data);
               
            }

    function dit(){
               $user_search_id = $this->uri->segment(3);
               $data['title_number_val'] = str_replace("%20"," ",$this->uri->segment(4));
               $data['query'] =   $this->db->get_where('user_search', array('user_search_id'=>$user_search_id));
               $data['listquery'] = $this->user_search_model->listItem();
               $this->load->view('view_entry',$data);
               
            }
                    
   
	}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */