<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Farmer_profile extends MY_Controller
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


    public function view($farmer_id)
    {
        $this->load->model('farmer_model');
        $data['user'] = $this->farmer_model->get_farmer($farmer_id);
        $this->load->view('farmer_profile', $data);

    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */