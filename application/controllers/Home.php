<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('loginform');
	}
	public function insert_data()
	{
		$name = $this->input->post('name');
		echo $name;die();
	}
}
