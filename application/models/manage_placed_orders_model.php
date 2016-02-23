<?php

class Manage_placed_orders_model extends CI_Model
{


    /*-------------------------------Farmer Products------------------------------------------------------*/
    function show_orders_orgs()
    {
        $query = $this->db->get('buyer_products');
        $query_result = $query->result();
        return $query_result;
    }

    // Function To Fetch Selected Student Record
    function show_product_org_id($dataf)
    {
        $this->db->select('*');
        $this->db->from('buyer_products');
        $this->db->where('buyer_product_id', $dataf);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    /*this function adds a product to the database*/
    function add_order($order = NULL)
    {
        $this->db->insert('buyer_products', $order);
        return $this->db->insert_id();
    }


    /*this function gets a list of all products in the datbase*/
    function get_order()
    {
        $this->db->select('*');
        $this->db->from('buyer_products');
        $query = $this->db->get();
        return $query->result();
    }

    /*this function updates data of a particular product given its id*/
    function update_order($fid, $fdata)
    {
        $this->db->where('buyer_product_id', $fid);
        $this->db->update('buyer_products', $fdata);
    }


    function get_order_id($dataf)
    {
        $this->db->select('buyer_product_id');
        $this->db->from('buyer_products');
        $this->db->where('product_name', $dataf);
        $query = $this->db->get();
        $result = $query->row()->buyer_product_id_id;
        return $result;
    }


    /*---------------------------------------------------------------------------------------------------*/
}

?>