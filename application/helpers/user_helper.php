<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// Be sure to include the file you've just downloaded
require_once('AfricasTalkingGateway.php');


function is_logged_in()
{
    $CI = &get_instance();
    $user_data = $CI->session->all_userdata();

    if (!empty($user_data ['user_id'])) {
        return true;
    } else {
        return false;
    }

}


function check_if_user_exists($email_address)
{
    $CI = get_instance();
    $CI->db->where('email_address', $email_address);
    $result = $CI->db->get('user_details');
    if ($result->num_rows() > 0) {
        return $result->result();
    } else {
        return false;

    }
}


function get_product_name($product_id)
{
    $CI = get_instance();
    $CI->db->where('product_type_id', $product_id);
    $result = $CI->db->get('product_types');
    if ($result->num_rows() > 0) {
        return $result->result()[0]->product_type;
    } else {
        return null;

    }
}


function check_if_product_is_booked($product_id, $buyer_id)
{
    $CI = get_instance();
    $CI->db->where('product_id', $product_id);
    $CI->db->where('buyer_id', $buyer_id);
    $result = $CI->db->get('buyer_bookings');
    if ($result->num_rows() > 0) {
        return true;
    } else {
        return false;

    }
}


function check_if_order_is_booked($order_id, $farmer_id)
{
    $CI = get_instance();
    $CI->db->where('order_id', $order_id);
    $CI->db->where('farmer_id', $farmer_id);
    $result = $CI->db->get('farmer_bookings');
    if ($result->num_rows() > 0) {
        return true;
    } else {
        return false;

    }
}


function send_message($number, $message)
{


    $username = "tonyhinjos";
    $apikey = "aab1db5152482a55e83139c84d9b88427dfa415dbada24a5f91d975fed41e556";

    $recipients = $number;//enter the phone numbers you wish to send the texts to.....here

    $message = $message;

    $gateway = new AfricasTalkingGateway($username, $apikey);


    try {
        // Thats it, hit send and we'll take care of the rest.
        $results = $gateway->sendMessage($recipients, $message);
        foreach ($results as $result) {
            // Note that only the Status "Success" means the message was sent
            //   echo " Number: " .$result->number;
            //   echo " Status: " .$result->status;
            //   echo " MessageId: " .$result->messageId;
            //    echo " Cost: "   .$result->cost."\n";
        }
    } catch (AfricasTalkingGatewayException $e) {
        echo "Encountered an error while sending: " . $e->getMessage();
    }

// DONE!!!


}

function get_farmer_phone_from_product_id($product_id)
{
    $CI = get_instance();
    $CI->db->select('farmer_id');
    $CI->db->where('product_id', $product_id);
    $CI->db->limit(1);
    $result = $CI->db->get('product_details');
    $farmer_id = $result->result()[0]->farmer_id;

    $CI->db->select('telephone_number');
    $CI->db->where('farmer_id', $farmer_id);
    $CI->db->limit(1);
    $result = $CI->db->get('farmer_details');
    $phone_number = $result->result()[0]->telephone_number;

    return $phone_number;


}


function get_farmer_id_from_product_id($product_id)
{
    $CI = get_instance();
    $CI->db->select('farmer_id');
    $CI->db->where('product_id', $product_id);
    $CI->db->limit(1);
    $result = $CI->db->get('product_details');
    $farmer_id = $result->result()[0]->farmer_id;


    return $farmer_id;


}


function get_buyer_phone_from_order_id($order_id)
{
    $CI = get_instance();
    $CI->db->select('buyer_id');
    $CI->db->where('buyer_product_id', $order_id);
    $CI->db->limit(1);
    $result = $CI->db->get('buyer_products');
    $buyer_id = $result->result()[0]->buyer_id;

    $CI->db->select('telephone_number');
    $CI->db->where('buyer_id', $buyer_id);
    $CI->db->limit(1);
    $result = $CI->db->get('buyer_details');
    $phone_number = $result->result()[0]->telephone_number;

    return $phone_number;


}


function get_buyer_id_from_order_id($order_id)
{
    $CI = get_instance();
    $CI->db->select('buyer_id');
    $CI->db->where('buyer_product_id', $order_id);
    $CI->db->limit(1);
    $result = $CI->db->get('buyer_products');
    $buyer_id = $result->result()[0]->buyer_id;


    return $buyer_id;


}


function get_farmer_name($farmer_id)
{

    $CI = get_instance();
    $CI->db->select('surname');
    $CI->db->where('farmer_id', $farmer_id);
    $CI->db->limit(1);
    $result = $CI->db->get('farmer_details');
    $farmer_name = $result->result()[0]->surname;


    return $farmer_name;

}


function get_buyer_name($buyer_id)
{

    $CI = get_instance();
    $CI->db->select('customer_name');
    $CI->db->where('buyer_id', $buyer_id);
    $CI->db->limit(1);
    $result = $CI->db->get('buyer_details');
    $buyer_name = $result->result()[0]->customer_name;


    return $buyer_name;

}


function get_product_name_from_order_id($order_id)
{

    $CI = get_instance();
    $CI->db->select('product_id');
    $CI->db->where('buyer_product_id', $order_id);
    $CI->db->limit(1);
    $result = $CI->db->get('buyer_products');
    $product_id = $result->result()[0]->product_id;

    $CI->db->select('product_type');
    $CI->db->where('product_type_id', $product_id);
    $CI->db->limit(1);
    $result = $CI->db->get('product_types');
    $product_name = $result->result()[0]->product_type;

    return $product_name;
}


function get_product_name_from_product_id($product_id)
{

    $CI = get_instance();
    $CI->db->select('product_type_id');
    $CI->db->where('product_id', $product_id);
    $CI->db->limit(1);
    $result = $CI->db->get('product_details');
    $product_type_id = $result->result()[0]->product_type_id;

    $CI->db->select('product_type');
    $CI->db->where('product_type_id', $product_type_id);
    $CI->db->limit(1);
    $result = $CI->db->get('product_types');
    $product_name = $result->result()[0]->product_type;

    return $product_name;
}




















