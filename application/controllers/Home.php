<?php

class Home extends CI_Controller{

    public function index(){
        
        $this->load->view('loginform');
    }

    public function insert(){
        // echo "<pre>";
        // print_r($_POST);
        $data["name"]=$this->input->post('name');
        $data["email"]=$this->input->post('email');
        $data["mobile"]=$this->input->post('mobile');
        $this->db->insert('login_data',$data);
        echo "Data Inserted";
        // header('location:index');
    }
    public function getdata(){
        $this->load->view('data');
    }
}













?>