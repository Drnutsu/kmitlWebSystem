<?php
/**
 * Created by PhpStorm.
 * User: drnutjuang
 * Date: 26/11/2556
 * Time: 10:14 น.
 */

class News extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('news_model');
    }

    public function index(){
        //get news form active record.
        $data['news'] = $this->news_model->get_news();
        if($this->session->userdata('logged_in')){
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $this->load->view('template/header',$data);
            $this->load->view('news',$data);
            $this->load->view('template/footer');
        }else{
            $this->load->view('template/header');
            $this->load->view('news');
            $this->load->view('template/footer');
        }

    }

    public function json($number){
        $data = $this->news_model->get_news_json(FALSE,$number);
        $json = json_encode($data);
        echo $json;
        echo "\n";
    }
    
    public function checkMax($id){
        $data = $this->news_model->check_max();
        $max = $data[0]['id'];
        if($id != $max){
            $data = $this->news_model->get_news_json(FALSE,$max);
            echo json_encode($data);
        }else{
            echo "news";
        }
    }
        
} 