<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{


    public function index()
    {
        /**
         * left blank.
         */

        /*
         * to do
         * add default login_page
        */
       $data['title'] = 'Land Search GIS';
       $this->load->view('landing_page', $data);
    }


    /**
     * user login view loaded here
     */
    public function user_login()
    {
        $this->load->view('user_login');
    }

    /**
     * user register view loaded here
     */
    public function user_role()
    {
        $this->load->view('user_role');
    }

    /**
     * buyer login view loaded here
     */


    /**
     * farmer register view loaded here
     */
    public function user_register()
    {
        $this->load->view('user_register');
    }


    public function contact_us()
    {
        $this->load->view('contact_us');
    }

   public function forget_password()
    {
        $this->load->view('forget_password');
    }


    /*
     * Account creation
     *
     *
     */

    public function user_create_account()
    {
        $first_name = $this->input->post('first_name');
        $surname = $this->input->post('surname');
        $other_names = $this->input->post('other_names');
        $telephone_number = $this->input->post('telephone_number');
        $nearest_market_centre = $this->input->post('nearest_market_centre');
        $email_address = $this->input->post('email_address');
        $password = $this->input->post('password');

        $data_array = array(
            'first_name' => $first_name,
            'surname' => $surname,
            'other_names' => $other_names,
            'telephone_number' => $telephone_number,
            'nearest_market_center' => $nearest_market_centre,
            'email_address' => $email_address,
            'password' => md5($password)
        );
        if (check_if_farmer_exists($email_address) == false) {
            $this->load->model('farmer_model');
            $this->farmer_model->create($data_array);
            redirect(base_url() . 'login/farmer_login?success=true');
        } else {
            redirect(base_url() . 'login/farmer_register?error=true');
        }


    }


      /*
     * Authentications
    */

    public function user_authenticate()
    {
        $email_address = $this->input->post('email');
        $password = $this->input->post('password');

        $this->load->model('farmer_model');

        $validation = $this->farmer_model->validate($email_address, $password);
        if ($validation !== false) {
            $session_data = array(
                'user_id' => $validation->farmer_id,
                'email' => $validation->email,
                'surname' => $validation->surname,
                'phone' => $validation->telephone_number,
                'first_name' => $validation->first_name,
                'user_type' => 'farmer'

            );

            $this->session->set_userdata($session_data);
            redirect(base_url());
        } else {
            redirect(base_url() . 'login/farmer_login?error=true');
        }


    }

 

    

}


