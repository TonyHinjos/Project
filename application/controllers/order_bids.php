<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Order_bids extends MY_Controller
{
    protected $before_filter = array(
        'action' => '_check_if_logged_in',
        'except' => array()
    );
    private $data;

    public function index()
    {
        $this->load->model('product_model');
        $data['products'] = $this->product_model->get_all_my_booked_products();
        $this->load->view('order_bids', $data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */