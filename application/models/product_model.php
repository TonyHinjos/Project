<?php

class Product_model extends CI_Model
{


    /*-------------------------------Farmer Products------------------------------------------------------*/
    function show_product_orgs()
    {
        $query = $this->db->get('product_details');
        $query_result = $query->result();
        return $query_result;
    }

    // Function To Fetch Selected Student Record
    function show_product_org_id($dataf)
    {
        $this->db->select('*');
        $this->db->from('product_details');
        $this->db->where('product_id', $dataf);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    /*this function adds a product to the database*/
    function add_product($product = NULL)
    {
        $this->db->insert('product_details', $product);
        return $this->db->insert_id();
    }


    /*this function gets a list of all products in the datbase*/
    function get_product()
    {
        $this->db->select('*');
        $this->db->from('product_details');
        $query = $this->db->get();
        return $query->result();
    }

    /*this function updates data of a particular product given its id*/
    function update_product($fid, $fdata)
    {
        $this->db->where('product_id', $fid);
        $this->db->update('product_details', $fdata);
    }


    function get_product_id($dataf)
    {
        $this->db->select('product_id');
        $this->db->from('product_details');
        $this->db->where('product_name', $dataf);
        $query = $this->db->get();
        $result = $query->row()->product_id;
        return $result;
    }

    function show_product_type()
    {
        $query = $this->db->get('product_types');
        $query_result = $query->result();
        return $query_result;
    }

    function get_product_type_id_with_the_given_name($product_name)
    {
        $this->db->select('product_type_id');
        $this->db->from('product_types');
        $this->db->where('product_type', $product_name);
        $query = $this->db->get();
        $result = $query->row()->product_type_id;
        return $result;
    }


    /*---------------------------------------------------------------------------------------------------*/

    function get_all_products()
    {
        $result = $this->db->get('product_details');
        return $result->result();
    }

    function get_one_product($product_id)
    {

        $this->db->where('product_id', $product_id);
        $result = $this->db->get('product_details');
        if (!empty($result->result()[0])) {
            return $result->result()[0];
        } else {
            return $result->result();
        }

    }

    function get_all_my_booked_products()
    {


        $this->db->where('buyer_id', $this->session->userdata('user_id'));
        $bookings = $this->db->get('buyer_bookings');
        $bookings = $bookings->result();
        $final_result = array();
        foreach ($bookings as $booking) {
            $this->load->model('product_model');
            $final_result[] = $this->product_model->get_one_product($booking->product_id);
        }

        return $final_result;
    }


    function get_all_orders()
    {
        $result = $this->db->get('buyer_products');
        return $result->result();
    }

    function get_one_order($order_id)
    {

        $this->db->where('buyer_product_id', $order_id);
        $result = $this->db->get('buyer_products');
        if (!empty($result->result()[0])) {
            return $result->result()[0];
        } else {
            return $result->result();
        }

    }

    function get_all_my_booked_orders()
    {


        $this->db->where('farmer_id', $this->session->userdata('user_id'));
        $bookings = $this->db->get('farmer_bookings');
        $bookings = $bookings->result();
        $final_result = array();
        foreach ($bookings as $booking) {
            $this->load->model('product_model');
            $final_result[] = $this->product_model->get_one_order($booking->order_id);
        }

        return $final_result;
    }

}

?>