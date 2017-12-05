<?php

class User extends Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('UserModel');
		$this->load->model('ReminderModel');
		$this->load->model('LogModel');
		$this->load->model('StaffManagerModel');
		
		$this->load->model('ProfileModel');
	}

	// Login Method
	public function index (){

		if (isLoged()) {
	
			if(userType('staff'))
			redirect('reminders');
			
		
			if($_SESSION['userType'] == 'manager'){
		
		
				$staff = $this->StaffManagerModel->getStaff($_SESSION['u_id']);
			
				$data['users'] = $this->UserModel->getUsers($staff);
			
			}elseif($_SESSION['userType'] == 'admin'){
				
				$data['users'] = $this->UserModel->getUsers();
			}
			
			$this->view('users', $data);
			
		}else{
			$this->view('index', $data);
		} 
	}
	
	function remove($id){
		if(userType('admin')){
			$this->UserModel->remove($id);
			flash('User Remove successfully.');
		}elseif(userType('manager')){
			$staff = $this->StaffManagerModel->getStaff($_SESSION['u_id']);
			if(in_array($id, $staff)){
				$this->UserModel->remove($id);
				flash('User Remove successfully.');
			}else{
				flash('Unexpected Error.');
			}
		}
		
		redirect('user');
	}
	
	function save($id = ''){
		$action = 'insert';
		$data = [];
		$data['manager_id'] = 0;
		
		if(!userType('admin') && $id=='')
			redirect('home');
		
		if($id){
			$manger_obj = $this->StaffManagerModel->getManager($id);
		if($manger_obj)
			$data['manager_id'] = $manger_obj->manager_id; 
		
			$action = 'update';
			$data['user'] = $this->UserModel->getUserById($id);
		}
	
		$errors = [];
		
		if(!empty($_POST)){
			$data['user'] = jobject($_POST);
			
			if($_POST['username'] == ''){
				$errors['username'] = 'Username is include_onced'; 	
			}elseif($id && $this->UserModel->userExist($_POST['username'],$id)){
				
				$errors['username'] = 'Username Already exist';
				
			}elseif($id =="" && $this->UserModel->userExist($_POST['username'])){
				$errors['username'] = 'Username Already exist';
			}
			
			
			
		$re = '/^(?=.*\d)(?=.*[a-zA-Z])(?!.* )(?=.*^[a-zA-Z0-9]).{6,16}$/';
			if($_POST['password'] == '' && $action == 'insert'){
				$errors['password'] = 'Password is include_onced.'; 		
			}elseif($_POST['password'] != '' && !preg_match($re,$_POST['password'])){
				$errors['password'] = 'Please use both numbers and alphabits and a min of 6 letters.'; 		
				
			}
			
			if($_POST['user_type'] == 'staff' && $_POST['manager'] == ''){
				$errors['manager'] = 'Manager is include_onced'; 
			}
		
			if(empty($errors)){
				$mydata['username'] = $_POST['username'];
				$mydata['user_type'] = $_POST['user_type'];
			
				
				if($_POST['password'] !="")
					$mydata['password'] = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);
			
				if($action == 'insert'){
					
					$id = $this->UserModel->insert($mydata);
				}else{
					$this->UserModel->update($mydata, " id=$id");
					
				}
			
				$this->StaffManagerModel->setManager($id , $_POST['manager']);
				flash('User saved successfully');
				redirect('user');
				
			}
	
	}
		
		
		
		$data['roles'] = ['admin','manager','staff'];
		$data['managers'] = $this->UserModel->getUserByRole('manager');
		$data['errors'] = $errors;
		$this->view('user-form', $data);
	}
	
	// Login Method
	public function login (){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$this->UserModel->checkLogin($username, $password);
	}
	// New User Signup Method
	public function signup (){
		
		$re = '/^(?=.*\d)(?=.*[a-zA-Z])(?!.* )(?=.*^[a-zA-Z0-9]).{6,16}$/';


		
		$errors = [];
		if (!empty($_POST)){
			
			$data['user'] = jobject($_POST);
			
			
			if(trim($_POST['firstname'])==''){
				$errors['firstname'] = 'First name is required';
			}
			if(trim($_POST['lastname'])==''){
				$errors['lastname'] = 'Last name is required';
			}
			
			if(trim($_POST['username'])==''){
				$errors['username'] = 'Username is required';
			}elseif($this->UserModel->userExist($_POST['username'])){
				$errors['username'] = 'Username already exists.';
			}
			
			
			if($_POST['email'] == ''){
				$errors['email'] = 'Email is required.'; 		
			}elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
				$errors['email'] = 'Email is not valid.'; 		
			}elseif(strpos($_POST['email'],'@algomau.ca') === false ){
				$errors['email'] = 'Email should have @algomau.ca'; 		
			}
			
			if($_POST['password'] == ''){
				
				$errors['password'] = 'Password name is required';
			}else if(!preg_match($re,$_POST['password'])){
				$errors['password']= 'please use both numbers and alphabits and a min of 6 letters';
			}
			
			if($_POST['password'] != $_POST['confirmPassword']){
				$errors['confirmPassword']= 'Confirm password must match.';
			}
			
			if(empty($errors)){
				$mydata['username'] = $_POST['username']; 
				$mydata['password'] =  password_hash(trim($_POST['password']), PASSWORD_DEFAULT); 
				$id = $this->UserModel->userSignup($mydata);
				
				if($id){
					$pdata['user_id'] = $id ;
					$pdata['firstname'] = $_POST['firstname'];
					$pdata['lastname'] = $_POST['lastname'];
					$pdata['email'] = $_POST['email'];
					$profile_id = $this->ProfileModel->insert($pdata);
				}
				flash('You have been register successfully with username "'.$_POST['username'].'" .');
				redirect('home');
			}
			
		
		}
		
		$data['errors'] = $errors;
			$this->view('signup', $data);
		
	}
	// User logout Method
	public function logout (){
		$this->UserModel->userLogout();
	}
	
	
}