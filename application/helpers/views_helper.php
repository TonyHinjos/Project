<?php
/**
 * Created by IntelliJ IDEA.
 * User: urandu
 * Date: 2/27/16
 * Time: 1:38 PM
 */

function new_view($question_id,$ip_address,$source)
{
    $data=array(
        "question_id"=>$question_id,
        "ip_address"=>$ip_address,
        "source"=>$source
    );
    $CI=get_instance();
    $CI->db->insert("question_views",$data);
}


function get_question_total_views($question_id)
{
    $CI=get_instance();
    $CI->db->where("question_id",$question_id);
    $result=$CI->db->get("question_views");

    return $result->num_rows();

}

function new_page_view($ip_address,$user_agent,$request)
{
    $data=array(
        "ip_address"=>$ip_address,
        "user_agent"=>$user_agent,
        "request"=>$request
    );
    $CI=get_instance();
    $CI->db->insert("page_views",$data);
}