<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User_login extends CI_Controller
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
   
       $this->load->view('user_login');
    }


    /*
     * Authentications
    */

     function __encrip_password($password)
    {
        return md5($password);
    }

    /**
     * check the username and the password with the database
     * @return void
     */
    function user_authenticate()
    {
        $this->load->model('user_model');
        $email = $this->input->post('email_address');
        $password = $this->__encrip_password($this->input->post('password'));
        $is_valid = $this->user_model->validate($email, $password);

        if (!empty($is_valid)) {
            $user_role = $is_valid[0]['user_role'];
            $user_id = $is_valid[0]['user_id'];
            $first_name = $is_valid[0]['first_name'];
            $surname = $is_valid[0]['surname'];
            $last_name = $is_valid[0]['last_name'];
            $mobile_no = $is_valid[0]['mobile_no'];
            //print_r($is_valid);
            $data = array(
                'user_id' => $user_id,
                'is_logged_in' => true,
                'user_role' => $user_role,
                'first_name' => $first_name,
                'surname' => $surname,
                'mobile_no' => $mobile_no,
                'last_name' => $last_name,
                'email_address' => $email
            );
            $this->session->set_userdata($data);
             if($this->session->userdata('user_role')=='admin')
             {
                redirect(base_url().'admin_dashboard#?success=true');
            }elseif($this->session->userdata('user_role')=='landowner' || $this->session->userdata('user_role')=='landbuyer' || $this->session->userdata('user_role')=='agent' || $this->session->userdata('user_role')=='advocate' || $this->session->userdata('user_role')=='surveyor'){
                 redirect(base_url().'#?success=true');
            }

        } else // incorrect username or password
        {
            redirect(base_url() .'user_login?error=true');
            //$data['error_message'] = TRUE;
            //$this->load->view('login', $data);
        }
    }
     function logout()
    {
        $this->session->sess_destroy();
       redirect(base_url() .'user_login');
    }

}