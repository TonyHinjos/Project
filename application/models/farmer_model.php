<?php

class Farmer_model extends CI_Model
{

    /**
     * create farmer
     */
    public function create($data_array)
    {

        return $this->db->insert('farmer_details', $data_array);

    }

    /**
     * edit farmer details
     */
    public function edit($data_array, $farmer_id)
    {

        $this->db->where('farmer_id', $farmer_id);
        return $this->db->update('farmer_details', $data_array);

    }

    /**
     * get one farmer
     */
    public function get_farmer($farmer_id)
    {
        $this->db->where('farmer_id', $farmer_id);
        $query = $this->db->get('farmer_details');
        return $query->result()[0];
    }

    /**
     * get all farmers
     */
    public function get_all_farmers()
    {

        $query = $this->db->get('farmer_details');
        return $query->result();
    }


    /**
     * authenticate farmer
     */
    public function validate($email_address, $password)
    {
        $this->db->where('email_address', $email_address);
        $this->db->where('password', md5($password));
        $this->db->limit(1);
        $result = $this->db->get('farmer_details');

        if ($result->num_rows() > 0) {

            return $result->result()[0];
        } else {
            return false;
        }
    }


}
