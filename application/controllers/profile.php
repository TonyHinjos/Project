<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends MY_Controller
{
    protected $before_filter = array(
        'action' => '_check_if_logged_in',
        'except' => array()
    );
    private $data;

    public function index()
    {
        $this->load->model('farmer_model');
        $data['user'] = $this->farmer_model->get_farmer($this->session->userdata('user_id'));
        $this->load->view('profile', $data);
    }


    public function farmer_edit_account()
    {
        $first_name = $this->input->post('first_name');
        $surname = $this->input->post('surname');
        $other_names = $this->input->post('other_names');
        $telephone_number = $this->input->post('telephone_number');
        $nearest_market_centre = $this->input->post('nearest_market_centre');
        $email_address = $this->input->post('email_address');
        $password = $this->input->post('password');
        $longitude = $this->input->post('longitude');
        $latitude = $this->input->post('latitude');

        if ($password == 'original') {
            $data_array = array(
                'first_name' => $first_name,
                'surname' => $surname,
                'other_names' => $other_names,
                'telephone_number' => $telephone_number,
                'nearest_market_center' => $nearest_market_centre,
                'email_address' => $email_address,
                'longitude' => $longitude,
                'latitude' => $latitude
            );
        } else {
            $data_array = array(
                'first_name' => $first_name,
                'surname' => $surname,
                'other_names' => $other_names,
                'telephone_number' => $telephone_number,
                'nearest_market_center' => $nearest_market_centre,
                'email_address' => $email_address,
                'longitude' => $longitude,
                'latitude' => $latitude,
                'password' => md5($password)
            );
        }


        $this->load->model('farmer_model');
        $this->farmer_model->edit($data_array, $this->session->userdata('user_id'));
        redirect(base_url() . 'profile?success=true');


    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */