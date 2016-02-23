<?php

class Notifications_model extends CI_Model
{

    public function notify_farmer_booking($product_id, $buyer_id)
    {
        $data = array(
            'product_id' => $product_id,
            'buyer_id' => $buyer_id,
            'message' => 'booking',
            'farmer_id' => get_farmer_id_from_product_id($product_id)
        );

        $this->db->insert('farmer_notifications', $data);
        send_message(get_farmer_phone_from_product_id($product_id), "Poultry-Kenya,You have a new product booking! log in to poultry kenya to view the details.");
    }


    public function notify_buyer_booking($order_id, $farmer_id)
    {
        $data = array(
            'order_id' => $order_id,
            'farmer_id' => $farmer_id,
            'message' => 'booking',
            'buyer_id' => get_buyer_id_from_order_id($order_id)
        );

        $this->db->insert('buyer_notifications', $data);
        send_message(get_buyer_phone_from_order_id($order_id), "Poultry-Kenya,You have a new order booking! log in to poultry kenya to view the details.");
    }

    public function cancel_notify_farmer_booking($product_id, $buyer_id)
    {
        $data = array(
            'product_id' => $product_id,
            'buyer_id' => $buyer_id
        );

        $this->db->delete('farmer_notifications', $data);
    }

    public function cancel_notify_buyer_booking($order_id, $farmer_id)
    {
        $data = array(
            'order_id' => $order_id,
            'farmer_id' => $farmer_id
        );

        $this->db->delete('buyer_notifications', $data);
    }


    public function get_all_farmer_notifications()
    {
        $this->db->where('farmer_id', $this->session->userdata('user_id'));
        $result = $this->db->get('farmer_notifications');
        return $result->result();
    }

    public function get_all_buyer_notifications()
    {
        $this->db->where('buyer_id', $this->session->userdata('user_id'));
        $result = $this->db->get('buyer_notifications');
        return $result->result();
    }
}

?>