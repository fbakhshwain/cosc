<?php
class Profile extends Controller{
	function __construct(){
		parent::__construct();


		if(!isLoged()){
			redirect('home');
		}

		
		$this->load->model('LocationModel');
		$this->load->model('StaffManagerModel');
		$this->load->model('ProfileModel');
		$this->load->model('UserModel');
			
	}
	
	// View All notes
	public function save(){
		
		if(!empty($_POST)){
			$date1=date_create($_POST['birthday']);
			$date2=date_create(date("Y-m-d"));
			$diff=date_diff($date1,$date2);

			if($_POST['email'] == ''){
				exit('Email is required');				
			}elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
				exit('Email is not valid.'); 		
			}elseif(strpos($_POST['email'],'@algomau.ca') === false ){
				exit('Email should have @algomau.ca'); 		
			}

			
			if($_POST['phone_number'] == ''){
				exit('Phone number is required.');
			}elseif(!is_numeric($_POST['phone_number']) || strlen($_POST['phone_number']) != 10){
				
				exit('Phone number should be 10 digits long.');
			}
			
			if($diff->y<20){
			echo 'Birthdate must be at least 20 years ago';	
			exit();
			}			
			$this->ProfileModel->save($_POST);	
			
			
			$user_id = $_SESSION['u_id'];
			$where = 'id='.$_SESSION['u_id'];
				
			$this->UserModel->update(['profile'=>1], $where);
			$_SESSION['profile'] = 1;
			echo "ok";
			exit();			
		}

			
	}

	public function update($user_id){
		
		
		$data['profile'] =  $this->ProfileModel->getProfile($user_id);
		
		$errors = [];
		if(!empty($_POST)){
			$data['profile'] = jobject($_POST);
			$date1=date_create($_POST['birthday']);
			$date2=date_create(date("Y-m-d"));
			$diff=date_diff($date1,$date2);

			if($diff->y<20){
				$errors['birthday'] = 'Birthdate must be at least 20 years ago';
			}

			
			if($_POST['firstname'] == ''){
				$errors['firstname'] = 'First Name is required.';
			}
			
			if($_POST['lastname'] == ''){
				$errors['lastname'] = 'Last Name is required.';
			}

			
			if($_POST['email'] == ''){
				$errors['email'] = 'Email is required'; 		
			}elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
				$errors['email'] = 'Email is not valid.'; 		
			}elseif(strpos($_POST['email'],'@algomau.ca') === false ){
				$errors['email'] = 'Email should have @algomau.ca'; 		
			}
			
			if($_POST['note'] == ''){
				$errors['note'] = 'Note is required.';
			}

			
			if($_POST['phone_number'] == ''){
				$errors['phone_number'] = 'Phone number is required.';
			}elseif(!is_numeric($_POST['phone_number']) || strlen($_POST['phone_number']) != 10){
				
				$errors['phone_number'] = 'Phone number should be 10 digits long.';
			}
			
			
			if($_POST['province'] == ''){
				$errors['province'] = 'Province is required.';
			}
			
			if($_POST['city'] == ''){
				$errors['city'] = 'City is required.';
			}
			
			if(empty($errors)){
				$mydata['firstname'] = $_POST['firstname']; 
				$mydata['lastname'] = $_POST['lastname']; 
				$mydata['email'] = $_POST['email']; 
				$mydata['note'] = $_POST['note']; 
				$mydata['phone_number'] = $_POST['phone_number']; 
				$mydata['birthday'] = $_POST['birthday']; 
				$mydata['province'] = $_POST['province']; 
				$mydata['city'] = $_POST['city']; 
				$this->ProfileModel->updateProfie($mydata, $user_id);	
			}
			
		}
		
		$data['errors'] = $errors;
		$data['provinces'] =  $this->LocationModel->getProvinces();
		
		$province  = 1;
		
		if(isset($data['profile']->province))
			$province = $data['profile']->province;
		
		$data['cities'] =  $this->LocationModel->getCities($province );
		$this->view('profile-form', $data);
	}	
	
	public function cities($id){
		$cities = $this->LocationModel->getCities($id);
		$html = '';
		foreach($cities as $city){ 
						$html .= '<option value="'. $city->id .'" >'.$city->name.'</option>';
		} 
					
		echo $html;				
	}
	
}
