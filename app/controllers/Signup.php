<?php

class Signup extends Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('user');
		$this->view('signup');
		
	}

	public function signup (){
	
	}
	
}
?>