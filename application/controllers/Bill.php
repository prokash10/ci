<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bill extends CI_Controller {
	

public function __Construct(){
    parent::__construct();
    $this->load->model('bill');
    

}
	
	public function index()
	{
		$bill=new bill;
		$data['data']=$bill->get_bill();
		$this->load->view(includes/header);
		$this->load->view(include/footer);
		$this->load->view(bill/lidt,$data);
	}
	public function create(){

	}
	public function store(){

	}
	public function edit(){

	}
	public function update(){

	}
	public function delete(){
		
	}
}
