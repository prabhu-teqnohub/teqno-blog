<?php

class Home extends CI_Controller{

    public function index(){
        
        $this->load->view('loginform');
    }

    public function insert(){
        echo "Hello";
        die();
    }
}













?>