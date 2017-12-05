<?php
class Api extends Controller{
	function __construct(){
		parent::__construct();
	
		$this->load->model('UserModel');
		$this->load->model('LogModel');
		$this->load->model('ReminderModel');
		$this->load->model('ProfileModel');
		
		if(!isLoged())
			redirect('home');
	}

	
	// Login Method
	public function index (){
		
			$data= [];
			$this->view('api', $data);
		
	}

	
	// View All notes
	public function users($user_id = 0){
		$rows = $this->UserModel->getUsers($user_id);
		if(empty($rows)){
			$rows['error'] = 'No record found.';
		}
		
		echo json_encode($rows);
		
	}
	
	public function profiles($user_id = 0){
		$rows = $this->ProfileModel->getProfiles($user_id);
		if(empty($rows)){
			$rows['error'] = 'No record found.';
		}
		
		echo json_encode($rows);
		
	}
	
	public function reminders($user_id = 0){
		$rows = $this->ReminderModel->getReminders($user_id);
		if(empty($rows)){
			$rows['error'] = 'No record found.';
		}
		
		echo json_encode($rows);
		
	}
	
}
