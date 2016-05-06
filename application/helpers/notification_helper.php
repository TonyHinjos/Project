<?php
/**
 * Created by IntelliJ IDEA.
 * User: urandu
 * Date: 2/27/16
 * Time: 1:38 PM
 */



function send_notification($sender_id,$recipient_id,$notification)
{
    $data=array(
        "sender_id"=>$sender_id,
        "recipient_id"=>$recipient_id,
        "message"=>$notification
    );

    $CI=get_instance();
    //$CI->db->where("deleted",0);
    //$CI->db->where("user_id",$user_id);
    $CI->db->insert("notifications",$data);
    //return $result->num_rows();
}



