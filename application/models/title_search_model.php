<?php
/**
 * Created by IntelliJ IDEA.
 * User: enock
 * Date: 7/9/15
 * Time: 4:49 PM
 */
class Title_search_model extends CI_Model{

	function get_title_search_id_given_title_number($title_number){
    $this->db->select('title_search_id');
    $this->db->from('title_search');
    $this->db->where('title_number', $title_number);
    $query = $this->db->get();
    $result = $query->row()->title_search_id;
    return $result;
    }



}
?>