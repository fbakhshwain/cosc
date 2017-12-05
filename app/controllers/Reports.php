<?php
class Reports extends Controller{
	function __construct(){
		parent::__construct();
	
		$this->load->model('LogModel');
		$this->load->model('UserModel');
		$this->load->model('ReminderModel');
		$this->load->model('ProfileModel');
		
		
		if(!isLoged() || !userType('admin'))
			redirect('home');
	}

	function index(){
		$this->ReminderModel->mostReminder();
		$start = date('Y-m-d');
		$end = date('Y-m-d');
		if(isset($_GET['start']) && isset($_GET['end']) ){
			$start = $_GET['start'];
			$end = $_GET['end'];
		}
		$data['reminder_dates'] = $this->ReminderModel->reminderByDate($start, $end );
		
		$data['reminder'] = $this->ReminderModel->mostReminder();
		$data['logins'] = $this->LogModel->userLogs('login');
		$data['login_fails'] = $this->LogModel->userLogs('fail');
		$data['start'] =  $start;
		$data['end'] =  $end;
		$this->view('reports', $data);
	}
	
	function joins(){
		$data['users'] = $this->UserModel->joinReport();
		
		$this->view('report_join', $data);
	}
	
}

