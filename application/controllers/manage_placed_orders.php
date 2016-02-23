<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Manage_placed_orders extends MY_Controller
{
    protected $before_filter = array(
        'action' => '_check_if_logged_in',
        'except' => array()
    );
    private $data;

    function __construct()
    {
        parent::__construct();
        $this->load->model('manage_placed_orders_model');
        $this->load->model('product_model');
    }

    public function index()
    {
        $this->show_buyer_orders();
    }


    public function show_buyer_orders()
    {


        //$funding_agency_id = $this->uri->segment(3);//get id from the url
        $data['manage_placed_orders'] = $this->manage_placed_orders_model->show_orders_orgs();
        //$data['single_funding_agency'] = $this->agency_model->show_funding_org_id($funding_agency_id);
        $data['product_type'] = $this->product_model->show_product_type();
        $this->load->view('manage_placed_orders', $data);

    }

    function update_buyer_orders()
    {
        $id = $this->input->post('buyer_product_id');
        $product_type = $this->input->post('product_type');
        $product_type_id = $this->product_model->get_product_type_id_with_the_given_name($product_type);
        $data = array(
            'product_id' => $product_type_id,
            'status' => $this->input->post('status'),

            'date_needed' => $this->input->post('davailable'),
            'special_requirements' => $this->input->post('requirements'),


        );
        $this->manage_placed_orders_model->update_order($id, $data);
        $this->show_buyer_orders();
    }

    function delete_buyer_orders($id)
    {
        $this->db->where('buyer_product_id', $id);
        $this->db->delete('buyer_products');

        $this->show_buyer_orders();
    }

    public function save_buyer_orders()
    {
        $product_name = ($this->input->post('product_type'));
        $status = ($this->input->post('status'));
        $davailable = ($this->input->post('davailable'));
        $requirements = ($this->input->post('requirements'));

        $order = array(
            'product_id' => $product_name,
            'status' => $status,
            'buyer_id' => $this->session->userdata('user_id'),
            'date_needed' => $davailable,
            'special_requirements' => $requirements


        );

        $orderId = $this->manage_placed_orders_model->add_order($order);
        $this->show_buyer_orders();


    }
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */