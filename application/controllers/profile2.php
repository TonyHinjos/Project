<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Profile2 extends MY_Controller
{
    protected $before_filter = array(
        'action' => '_check_if_logged_in',
        'except' => array()
    );
    private $data;

    public function index()
    {
        $this->load->model('buyer_model');
        $data['user'] = $this->buyer_model->get_buyer($this->session->userdata('user_id'));
        $this->load->view('profile2', $data);
    }


    public function buyer_edit_account()
    {
        $customer_name = $this->input->post('customer_name');
        $telephone_number = $this->input->post('telephone_number');
        $nearest_market_centre = $this->input->post('nearest_market_centre');
        $email_address = $this->input->post('email_address');
        $password = $this->input->post('password');
        $longitude = $this->input->post('longitude');
        $latitude = $this->input->post('latitude');

        if ($password == 'original') {
            $data_array = array(
                'customer_name' => $customer_name,
                'telephone_number' => $telephone_number,
                'nearest_market_center' => $nearest_market_centre,
                'email_address' => $email_address,
                'longitude' => $longitude,
                'latitude' => $latitude
            );
        } else {
            $data_array = array(
                'customer_name' => $customer_name,
                'telephone_number' => $telephone_number,
                'nearest_market_center' => $nearest_market_centre,
                'email_address' => $email_address,
                'longitude' => $longitude,
                'latitude' => $latitude,
                'password' => md5($password)
            );
        }


        $this->load->model('buyer_model');
        $this->buyer_model->edit($data_array, $this->session->userdata('user_id'));
        redirect(base_url() . 'profile2?success=true');


    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */