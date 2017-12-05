<?php
class Reminders extends Controller{
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
		
			$username = $_SESSION['currentUser'];
			$where = "username='$username' AND deleted ='0'";
			$data['notes'] = $this->ReminderModel->getAllRecords($where);
			$data['last_date'] = $this->LogModel->lastLogin();
			$this->view('reminder', $data);
		
	}

	
	// View All notes
	public function save($id = 0){
		
			$username = $_SESSION['currentUser'];
				
				$where = "username='$username' AND id ='$id'";
				$result = $this->ReminderModel->select($where);
				$row = $result->fetch_object();
				$data['note'] = '';
				if($row){
					$data['note'] = $row;
				}
				
			$errors = [];
			
			if (isset($_POST['newNote'])){
				$data['note'] = jobject($_POST);
				
				if($_POST['subject'] == ''){
					$errors['subject'] = "Subject is required";
				}
				if($_POST['description'] == ''){
					$errors['description'] = "Description is required";
				}
				
				if(empty($errors)){
					
				$created_date= date('Y-m-d H:i:s');
				$subject = $_POST['subject'];
				$description = $_POST['description'];
				
				
				$data=[
					'username'=> $username,
					'subject'=>$subject,
					'description'=>$description,
					'created_date'=>$created_date,
				];
				
				if($id){
					$where = "id ='$id'";
					$results = $this->ReminderModel->update($data, $where);
				}else{
					$results = $this->ReminderModel->insert($data);
				}
					if ($results){
						flash("Record Save successfully.");
						redirect('reminders');
					}else{
						flash("Error ! Please try again.");
						redirect('reminders/save');
					}
				

				}				
			}
			
			
				
				
				$this->view('reminder-form', $data);
	}
	
	public function remove ($arg = false){
		$where = "id ='$arg'";
		$data=['deleted'=> '1'];
		$result = $this->ReminderModel->update($data, $where);
		if($result){
			flash("Record Deleted successfully.");
			redirect('reminders');
		}
	}
	
	
}
