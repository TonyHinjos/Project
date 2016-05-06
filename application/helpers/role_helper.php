<?php
/**
 * Created by IntelliJ IDEA.
 * User: urandu
 * Date: 2/27/16
 * Time: 1:38 PM
 */

function get_role_list()
{
    $CI=get_instance();
    $CI->load->model("role_model");
    $results=$CI->role_model->get_all_roles();
    return $results;
}