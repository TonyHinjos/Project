<?php

class Gis_model extends CI_Model
{

    /**
     * create buyer
     */
    public function create($data_array)
    {

        return $this->db->insert('buyer_details', $data_array);

    }

    
} 
?>