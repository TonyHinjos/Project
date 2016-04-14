<?php

class User_search_model extends CI_Model
{   

	function __construct() {
        parent::__construct();
    }
	 

	 function show_current_search()
    {   $this->db->where('user_search_id',$this->db->insert_id());
        $query = $this->db->get('user_search');
        $query_result = $query->result();
        return $query_result;
    }
    
    function add_current_search($my_array=NULL)
    {
    $this->db->insert('user_search', $my_array);
  
    //echo'</br></br><div class="alert alert-success">One record inserted Successfully</div>';
    return $this->db->insert_id();
    }
     function listItem(){
        $this->db->order_by("parcel_number"); 
        $query = $this->db->get('user_search');
        
        return $query;
    }

   function do_edit($user_search_id,$title_number,$parcel_number,$purpose,$title_search_id){
        $data = array(
               	'title_number'=>$title_number,
	        	'parcel_number' =>$parcel_number,
		        'purpose'=>$purpose,
		        'title_search_id'=>$title_search_id,
               //'created' => $date,
            );

        $this->db->where('user_search_id', $user_search_id);
        $this->db->update('user_search', $data); 
        
        //this->db->where('user_search_id',$id);
        $query = $this->db->get('user_search');
        $query_result = $query->result();
        return $query_result;
        
        // if($this->db->affected_rows()>0){
        	
        //    // echo'</br></br><div class="alert alert-dismissable alert-success alert-cus"><h4>This Post Edited Successfully</h4></div>';
        // }
        // else{

        //    // echo'</br></br><div class="alert alert-dismissable alert-danger alert-cus"><h4>No Change found to update entry!</h4></div>';
        // }
   }



}