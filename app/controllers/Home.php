<?php
class Home extends Controller{
	function __construct(){
		parent::__construct();
	
		$this->load->model('UserModel');
		$this->load->model('LogModel');

	}

	function index(){
		
		if (isLoged()) {
			redirect('user');
		}else{
			$data['all_attempts'] = $this->LogModel->allLoginAttempts();
			$this->view('index', $data);
		} 
	}
	
	function about(){
		$data['all_attempts'] = $this->LogModel->allLoginAttempts();
		$this->view('about', $data);
	}
}
?>