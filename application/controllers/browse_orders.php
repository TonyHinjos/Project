<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Browse_orders extends MY_Controller
{
    protected $before_filter = array(
        'action' => '_check_if_logged_in',
        'except' => array()
    );
    private $data;

    public function index()
    {
        $this->load->model('product_model');
        $data['orders'] = $this->product_model->get_all_orders();
        $this->load->view('browse_orders', $data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */