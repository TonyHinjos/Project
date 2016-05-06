<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Print_invoice extends MY_Controller
{
    protected $before_filter = array(
        'action' => '_check_if_logged_in',
        'except' => array()
    );
    private $data;

    function __construct()
    {
        parent::__construct();
        $this->load->model('print_invoice_model');
        $this->load->model('user_search_model');
    }

        public function index() {
               $user_search_id = $this->uri->segment(3);
               $data['title_number_val'] = str_replace("%20"," ",$this->uri->segment(4));
               $data['query'] =   $this->db->get_where('user_search', array('user_search_id'=>$user_search_id));
               $data['user'] = $this->print_invoice_model->get_user_details();
               $this->load->view('print_invoice',$data);
    }
    public function print_pdf()
    {
        $html=$this->input->post("html");
        $html2=$this->input->post("html2");
        $submit_invoice=$this->input->post("submit_invoice");
        //$title=$this->input->post("title");

        if(!empty($submit_invoice))
        {

            magic_p($html);
        }
        else
        {
            magic_p($html2);
        }



    }
  public function print_marking_scheme_pdf()
    {
        $html=$this->input->post("html");//yee

        $title=$this->input->post("title");
        magic_p($html,$title."-questions");

    }
}