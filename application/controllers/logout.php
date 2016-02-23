<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller
{


    public function index()
    {
        /**
         * logout by clearing the session array.
         */
        $this->session->sess_destroy();
        redirect(base_url());
    }


}


