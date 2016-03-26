<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Landing extends CI_Controller
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
       $data['title'] = 'Land|GIS';
       $this->load->view('landing', $data);
    }


    /**
     * user login view loaded here
     */
  
   /**
     * user register view loaded here
     */
  
    /**
     * buyer login view loaded here
     */


    /**
     * farmer register view loaded here
     */
    


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

   
 

    

}


