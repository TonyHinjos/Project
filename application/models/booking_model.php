<?php

class Booking_model extends CI_Model
{

    public function new_buyer_booking($product_id, $user_id)
    {
        $data = array(
            'buyer_id' => $user_id,
            'product_id' => $product_id
        );

        return $this->db->insert('buyer_bookings', $data);
    }


    public function cancel_buyer_booking($product_id, $user_id)
    {
        $data = array(
            'buyer_id' => $user_id,
            'product_id' => $product_id
        );

        return $this->db->delete('buyer_bookings', $data);
    }

    public function new_farmer_booking($order_id, $user_id)
    {
        $data = array(
            'farmer_id' => $user_id,
            'order_id' => $order_id
        );

        return $this->db->insert('farmer_bookings', $data);
    }


    public function cancel_farmer_booking($order_id, $user_id)
    {
        $data = array(
            'farmer_id' => $user_id,
            'order_id' => $order_id
        );

        return $this->db->delete('farmer_bookings', $data);
    }

}

?>