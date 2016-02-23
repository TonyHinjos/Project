<?php

class Buyer_model extends CI_Model
{

    /**
     * create buyer
     */
    public function create($data_array)
    {

        return $this->db->insert('buyer_details', $data_array);

    }

    /**
     * edit buyer details
     */
    public function edit($data_array, $buyer_id)
    {

        $this->db->where('buyer_id', $buyer_id);
        return $this->db->update('buyer_details', $data_array);

    }

    /**
     * get one buyer
     */
    public function get_buyer($buyer_id)
    {
        $this->db->where('buyer_id', $buyer_id);
        $query = $this->db->get('buyer_details');
        return $query->result()[0];
    }

    /**
     * get all buyers
     */
    public function get_all_buyers()
    {

        $query = $this->db->get('buyer_details');
        return $query->result();
    }


    /**
     * authenticate buyer
     */
    public function validate($email_address, $password)
    {
        $this->db->where('email_address', $email_address);
        $this->db->where('password', md5($password));
        $this->db->limit(1);
        $result = $this->db->get('buyer_details');

        if ($result->num_rows() > 0) {
            return $result->result()[0];
        } else {
            return false;
        }
    }
} 
