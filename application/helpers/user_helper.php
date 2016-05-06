<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


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
function getTimeDifference($time) {
    //Let's set the current time
    $currentTime = date('Y-m-d H:i:s');
    $toTime = strtotime($currentTime);

    //And the time the notification was set
    $fromTime = strtotime($time);

    //Now calc the difference between the two
    $timeDiff = floor(abs($toTime - $fromTime) / 60);

    //Now we need find out whether or not the time difference needs to be in
    //minutes, hours, or days
    if ($timeDiff < 2) {
        $timeDiff = "Just now";
    } elseif ($timeDiff > 2 && $timeDiff < 60) {
        $timeDiff = floor(abs($timeDiff)) . " minutes ago";
    } elseif ($timeDiff > 60 && $timeDiff < 120) {
        $timeDiff = floor(abs($timeDiff / 60)) . " hour ago";
    } elseif ($timeDiff < 1440) {
        $timeDiff = floor(abs($timeDiff / 60)) . " hours ago";
    } elseif ($timeDiff > 1440 && $timeDiff < 2880) {
        $timeDiff = floor(abs($timeDiff / 1440)) . " day ago";
    } elseif ($timeDiff > 2880) {
        $timeDiff = floor(abs($timeDiff / 1440)) . " days ago";
    }

    return $timeDiff;
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

function UUIDv4() {
    return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',

        // 32 bits for "time_low"
        mt_rand(0, 0xffff), mt_rand(0, 0xffff),

        // 16 bits for "time_mid"
        mt_rand(0, 0xffff),

        // 16 bits for "time_hi_and_version",
        // four most significant bits holds version number 4
        mt_rand(0, 0x0fff) | 0x4000,

        // 16 bits, 8 bits for "clk_seq_hi_res",
        // 8 bits for "clk_seq_low",
        // two most significant bits holds zero and one for variant DCE1.1
        mt_rand(0, 0x3fff) | 0x8000,

        // 48 bits for "node"
        mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
    );
}




function randomPassword()
{
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789_-)(&$%#@!+=";
    $pass = array(); //declared $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}


function get_user_id_from_email_address($user_email)
{
    $CI = &get_instance ();
    $CI->db->where("user_email",$user_email);
    $result=$CI->db->get("users");
    $result=$result->result()[0]->user_id;

    return $result;
}

function get_user_id_from_phone_number($user_phone)
{
    $CI = &get_instance ();
    $CI->db->where("user_phone",$user_phone);
    $result=$CI->db->get("users");
    $result=$result->result()[0]->user_id;

    return $result;
}

function get_user_name_from_user_id($user_id)
{
    $CI = &get_instance ();
    $CI->db->where("user_id",$user_id);
    $result=$CI->db->get("users");
    if($result->num_rows()>0)
    {
        $result=$result->result()[0]->user_surname." ".$result->result()[0]->user_other_names;

       // die("hhhhhhhhhhhhhhhhhhhhhhhhhhhhffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff");
        return $result;
    }
    else
    {
     return null;
    }

}

function get_ward_coordinators($ward_id)
{
    $CI = &get_instance ();
    $CI->db->where("ward_id",$ward_id);
    $result=$CI->db->get("ward_coordinators");
    if($result->num_rows()>0)
    {
        $return_array=array();
        foreach($result->result() as $res)
        {
            $return_array[]=$res->user_id;
        }
        return $return_array;

    }
    else
    {
        return null;
    }

}



function get_constituency_coordinators($constituency_id)
{
    $CI = &get_instance ();
    $CI->db->where("constituency_id",$constituency_id);
    $result=$CI->db->get("constituency_coordinators");
    if($result->num_rows()>0)
    {
        $return_array=array();
        foreach($result->result() as $res)
        {
            $return_array[]=$res->user_id;
        }
        return $return_array;

    }
    else
    {
        return null;
    }

}

function get_county_coordinators($county_id)
{
    $CI = &get_instance ();
    $CI->db->where("county_id",$county_id);
    $result=$CI->db->get("county_coordinators");
    if($result->num_rows()>0)
    {
        $return_array=array();
        foreach($result->result() as $res)
        {
            $return_array[]=$res->user_id;
        }
        return $return_array;

    }
    else
    {
        return null;
    }

}





function send_sms($number,$message)
{


    $username   = "urandu";
    $apikey     = "1677ae70e5d03411d857f3c22e046441681af2f56c3052cadad3f0305aaa3218";


    $recipients = $number;


    $message    = $message;


    $gateway    = new AfricasTalkingGateway($username, $apikey);


    try
    {
        // Thats it, hit send and we'll take care of the rest.
        $results = $gateway->sendMessage($recipients, $message);
        foreach($results as $result) {

        }
        $CI=get_instance();
        $data=array(
            "phone_number"=>$number,
            "message"=>$message
        );
        $CI->db->insert("sms_log",$data);
    }
    catch ( AfricasTalkingGatewayException $e )
    {
        echo "Encountered an error while sending: ".$e->getMessage();
    }

// DONE!!!

}




function send_mail($from,$subject,$to,$message,$from_name="project-storm")
{

    $CI=get_instance();
    $CI->email->from($from, $from_name);
    $CI->email->to($to);


    $CI->email->subject($subject);
    $CI->email->message($message);

    $CI->email->send();

   // $CI->email->print_debugger();
}



















