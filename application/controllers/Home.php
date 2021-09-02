<?php

class Home extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }

    public function index(){
       $result=$this->db->get('login_Data');
    //    echo var_dump($result);
    $totaldata=$result->result();
    // print_r($totaldata);
    $this->load->view("data",compact('totaldata'));
    }

    public function add(){
        $this->load->view('loginform');
    }
    
    public function insert(){
       if($this->input->post('submit')){
        $data=array('name'=>$this->input->post('name'),
        'email'=>$this->input->post('email'),
        'mobile'=>$this->input->post('mobile'));
        // $data["name"]=$this->input->post('name');
        // $data["email"]=$this->input->post('email');
        // $data["mobile"]=$this->input->post('mobile');
        $this->db->insert('login_data',$data);
        echo "<span>Data Inserted</span>";
        header('location:index');
       }
       else {
           echo " Something went wrong";
       }
        // $data["name"]=$this->input->post('name');
        // $data["email"]=$this->input->post('email');
        // $data["mobile"]=$this->input->post('mobile');
        // $this->db->insert('login_data',$data);
        // echo "Data Inserted";
        // header('location:index');
    }
    public function getdata(){
        $data=$this->db->get('login_data');
        $this->load->view('data', compact($data));
        
    }
}













?>