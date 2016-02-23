<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Buyer_profile extends MY_Controller
{
    protected $before_filter = array(
        'action' => '_check_if_logged_in',
        'except' => array()
    );
    private $data;

    public function index()
    {
        redirect(base_url());
    }


    public function view($buyer_id)
    {
        $this->load->model('buyer_model');
        $data['user'] = $this->buyer_model->get_buyer($buyer_id);
        $this->load->view('buyer_profile', $data);

    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */