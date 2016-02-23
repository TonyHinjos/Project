<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Manage_products extends MY_Controller
{
    protected $before_filter = array(
        'action' => '_check_if_logged_in',
        'except' => array()
    );
    private $data;

    function __construct()
    {
        parent::__construct();
        $this->load->model('product_model');
    }

    public function index()
    {
        $this->show_farmer_products();
    }


    public function show_farmer_products()
    {


        //$funding_agency_id = $this->uri->segment(3);//get id from the url
        $data['manage_products'] = $this->product_model->show_product_orgs();
        $data['product_type'] = $this->product_model->show_product_type();
        //$data['single_funding_agency'] = $this->agency_model->show_funding_org_id($funding_agency_id);
        $this->load->view('manage_products', $data);

    }

    function update_farmer_products()
    {
        $id = $this->input->post('product_id');
        $product_type = $this->input->post('product_type');
        $product_type_id = $this->product_model->get_product_type_id_with_the_given_name($product_type);
        $data = array(
            'product_type_id' => $product_type_id,
            'quantity_available' => $this->input->post('qavailable'),
            'date_available' => $this->input->post('davailable'),
            'proposed_selling_price' => $this->input->post('selling_price'),
            'weight' => $this->input->post('product_weight'),
            'grade' => $this->input->post('product_grade'),
            'color' => $this->input->post('product_color'),
            'status' => $this->input->post('product_status'),

        );
        $this->product_model->update_product($id, $data);
        $this->show_farmer_products();
    }

    function delete_farmer_products($id)
    {
        $this->db->where('product_id', $id);
        $this->db->delete('product_details');

        $this->show_farmer_products();
    }

    public function save_farmer_products()
    {
        $product_type_id = ($this->input->post('product_type'));
        $qavailable = ($this->input->post('qavailable'));
        $davailable = ($this->input->post('davailable'));
        $selling_price = ($this->input->post('selling_price'));
        $product_weight = ($this->input->post('product_weight'));
        $product_grade = ($this->input->post('product_grade'));
        $product_color = ($this->input->post('product_color'));
        $product_status = ($this->input->post('product_status'));

//        $product_type_id=$this->product_model->get_product_type_id_with_the_given_name($product_type);
        $product = array(
            'product_type_id' => $product_type_id,
            'quantity_available' => $qavailable,
            'date_available' => $davailable,
            'proposed_selling_price' => $selling_price,
            'weight' => $product_weight,
            'grade' => $product_grade,
            'farmer_id' => $this->session->userdata('user_id'),
            'color' => $product_color,
            'status' => $product_status

        );

        $productId = $this->product_model->add_product($product);
        $this->show_farmer_products();


    }
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */