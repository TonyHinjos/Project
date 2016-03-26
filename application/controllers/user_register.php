<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User_register extends CI_Controller
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
   
       $this->load->view('user_register');
    }



 public function user_create_account()
    {   $user_role = $this->input->post('userrole');
        $gender = $this->input->post('gender');
        $first_name = $this->input->post('firstname');
        $surname = $this->input->post('surname');
        $last_name = $this->input->post('lastname');
        $email_address = $this->input->post('email');
        $password = $this->input->post('password');
        $mobile_no = $this->input->post('mobile');
        $national_id = $this->input->post('nationalid');
        $county = $this->input->post('county');
        $ward = $this->input->post('ward');
        $web_address = $this->input->post('url');
       
        

        $data_array = array(
            'user_role' => $user_role,
            'gender' => $gender,
            'first_name' => $first_name,
            'surname' => $surname,
            'last_name' => $last_name,
            'email_address' => $email_address,
            'password' => md5($password),
            'mobile_no' => $mobile_no,
            'national_id' => $national_id,
            'county' => $county,
            'ward' => $ward,
            'web_address' => $web_address
            
        );
        if (check_if_user_exists($email_address) == false) {
            $this->load->model('user_model');
            $this->user_model->create($data_array);
            redirect(base_url() . 'user_login?success=true');

        } else {
            redirect(base_url() . 'user_register?error=true');
        }


    }


      /*
     * Authentications
    */

   
    /**
     * check the username and the password with the database
     * @return void
     */
   
    
}