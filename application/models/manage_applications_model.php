<?php
class Manage_applications_model extends CI_Model
{   

	
  function get_applications(){
  	   $this->db->where('user_id',$this->session->userdata('user_id'));
       $this->db->order_by('date'); 
       $query= $this->db->get('user_search');
       $query_result = $query->result();
       return $query_result;

    }

}


?>