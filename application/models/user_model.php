<?php

class User_model extends CI_Model
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
    public function create($data_array)
    {

        return $this->db->insert('user_details', $data_array);

    }

    /**
     * edit farmer details
     */
    public function edit($data_array, $user_id)
    {

        $this->db->where('user_id', $user_id);
        return $this->db->update('user_details', $data_array);

    }

    /**
     * get one farmer
     */
    public function get_user($user_id)
    {
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('user_details');
        return $query->result()[0];
    }

    /**
     * get all farmers
     */
    public function get_all_users()
    {

        $query = $this->db->get('user_details');
        return $query->result();
    }


    /**
     * authenticate farmer
     */
    function validate($email, $password)
    {
        $this->db->where('email_address', $email);
        $this->db->where('password',$password);
        $this->db->limit(1);
        $result = $this->db->get('user_details');

         if ($result->num_rows == 1) {
            return $result->result_array();
        }
        else{
            return null;
        }
    }


}
