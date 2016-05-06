<?php

class Print_invoice_model extends CI_Model
{
    /**
     * Validate the login's data with the database
     * @param string $user_name
     * @param string $password
     * @return void
     */

    /**
     * create farmer
     */
function get_current_search($user_search_id)
    {   $this->db->where('user_search_id',$user_search_id);
        $query = $this->db->get('user_search');
        $query_result = $query->result();
        return $query_result;
    }
    function get_user_details(){
        $this->db->where('user_id',$this->session->userdata('user_id')); 
        $query = $this->db->get('user_details');
        
        return $query;
    }

}