<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Browse_products extends MY_Controller
{
    protected $before_filter = array(
        'action' => '_check_if_logged_in',
        'except' => array()
    );
    private $data;

    public function index()
    {
        $this->load->model('product_model');
        $data['products'] = $this->product_model->get_all_products();
        $this->load->view('browse_products', $data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */