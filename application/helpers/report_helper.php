<?php
/**
 * Created by IntelliJ IDEA.
 * User: urandu
 * Date: 2/27/16
 * Time: 1:38 PM
 */
function total_ussd_sessions()
{
    $CI=get_instance();
    $result=$CI->db->get("ussd_log");
    $result=$result->num_rows();
    return $result;


}

function total_sms_sent()
{

    $CI=get_instance();
    $result=$CI->db->get("sms_log");
    $result=$result->num_rows();
    return $result;
}

function total_views()
{
    $CI=get_instance();
    $result=$CI->db->get("page_views");
    $result=$result->num_rows();
    return $result;
}

function total_views_for_day($date)
{

    $newdate = strtotime ( '+1 day' , strtotime ( $date ) ) ;
    $newdate = date ( 'Y-m-j' , $newdate );

   // echo $newdate;

    $CI=get_instance();
    $CI->db->where("date >=",$date);
    $CI->db->where("date <",$newdate);
    $result=$CI->db->get("page_views");
    $result=$result->num_rows();
    return $result;

}

function total_number_of_users()
{
    $CI=get_instance();
    $CI->db->where("deleted",0);
    $result=$CI->db->get("users");
    $result=$result->num_rows();
    return $result;
}

function total_number_of_questions_added()
{
    $CI=get_instance();
    $CI->db->where("deleted",0);
    $result=$CI->db->get("questions");
    $result=$result->num_rows();
    return $result;
}

function total_number_of_questions_published()
{
    $CI=get_instance();
    $CI->db->where("deleted",0);
    $CI->db->where("published",1);
    $result=$CI->db->get("questions");
    $result=$result->num_rows();
    return $result;
}

function total_number_of_questions_for_day($date)
{
    $newdate = strtotime ( '+1 day' , strtotime ( $date ) ) ;
    $newdate = date ( 'Y-m-j' , $newdate );

    // echo $newdate;

    $CI=get_instance();
    $CI->db->where("date >=",$date);
    $CI->db->where("date <",$newdate);
    $CI->db->where("deleted",0);
    //$CI->db->where("published",1);
    $result=$CI->db->get("questions");
    $result=$result->num_rows();
    return $result;
}

function most_viewed_questions()
{
    /*
     *
     * SELECT question_id, count( * ) AS freq
FROM question_views
GROUP BY question_id
ORDER BY freq DESC
LIMIT 30
     * */
    $CI=get_instance();
    ;
    //$CI->db->where("published",1);
    $result=$CI->db->query("SELECT question_id, count( * ) AS freq
                            FROM question_views
                            GROUP BY question_id
                            ORDER BY freq DESC
                            LIMIT 30");
    $result=$result->result();
    return $result;
}



function total_number_of_answers_added()
{

    $CI=get_instance();
    $CI->db->where("deleted",0);
    //$CI->db->where("published",1);
    $result=$CI->db->get("answers");
    $result=$result->num_rows();
    return $result;
}

function total_number_of_answers_verified()
{

    $CI=get_instance();
    $CI->db->where("deleted",0);
    //$CI->db->where("published",1);
    $CI->db->where("approved",1);
    $result=$CI->db->get("answers");
    $result=$result->num_rows();
    return $result;
}

