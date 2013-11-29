<?php
/**
 * model for news system.
 * User: drnutjuang
 * Date: 26/11/2556
 * Time: 10:55 น.
 */

class news_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    //news query function
    public function get_news($categoryId = FALSE,$number = 10){
        $this->db->limit($number);
        //user didn't send any categoryId
        if($categoryId == FALSE){
            $query = $this->db->get('news');
            return $query->result_array();
        }
        $query = $this->db->get_where('news',array('categoryId' => $categoryId));
        return $query->result_array();
    }

    public function get_news_json($categoryId = FALSE,$number = 10){
        $this->db->limit($number);
        $this->db->select('title,id,categoryId,pubDate,user_id');
        //user didn't send any categoryId
        if($categoryId == FALSE){
            $query = $this->db->get('news');
            return $query->result_array();
        }
        $query = $this->db->get_where('news',array('categoryId' => $categoryId));
        return $query->result_array();
    }
    
    public function check_max(){
        $this->db->select_max('id');
        $query = $this->db->get('news');
        return $query->result_array();
    }

} 