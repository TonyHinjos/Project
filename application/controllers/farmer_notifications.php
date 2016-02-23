<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Farmer_notifications extends MY_Controller
{
    protected $before_filter = array(
        'action' => '_check_if_logged_in',
        'except' => array()
    );
    private $data;

    public function index()
    {
        $this->load->model('notifications_model');
        $data['notifications'] = $this->notifications_model->get_all_farmer_notifications();
        $this->load->view('farmer_notifications', $data);

    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */