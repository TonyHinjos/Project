<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Notifications extends MY_Controller
{
    protected $before_filter = array(
        'action' => '_check_if_logged_in',
        'except' => array()
    );
    private $data;

    public function index()
    {
        $this->load->view('welcome_message');
    }


    public function buyer_booking($product_id)
    {

        $this->load->model('booking_model');
        $this->booking_model->new_buyer_booking($product_id, $this->session->userdata('user_id'));
        redirect(base_url() . "order_bids?success=true");
    }


    public function buyer_cancel_booking($product_id)
    {

        $this->load->model('booking_model');
        $this->booking_model->cancel_buyer_booking($product_id, $this->session->userdata('user_id'));
        redirect(base_url() . "order_bids?success=true");
    }


    public function farmer_booking($order_id)
    {

        $this->load->model('booking_model');
        $this->booking_model->new_farmer_booking($order_id, $this->session->userdata('user_id'));
        redirect(base_url() . "supply_bids?success=true");
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */