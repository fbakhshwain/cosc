<?php

class ProfileModel extends Model{
	
	public $table = 'personalDetails';
	
	
	function userUpdateById($data, $id){
		$where = 'id ='.$id;
		$this->update($data, $where);
	}


	function save($data){
		$user_id = $_SESSION['u_id'];
		$where = 'user_id ='.$_SESSION['u_id'];
		$profile = $this->count($where);
	
		$data['user_id'] = $user_id;
		if($profile){
				$this->update($data, $where);	
		}else{
				$this->insert($data);
		}
		return true;
		
	}
	
	
	function getProfile($user_id = 0){
		if(!$user_id)
		$user_id = $_SESSION['u_id'];
	
		$where = 'user_id ='.$user_id;
		return $this->selectOne($where);
	}
	
	function getProvinces(){
		$load = new Loader($this);
		$load->model('LocationModel');
		return $this->LocationModel->getProvinces();
	}
	
	function getCities($province){
		$load = new Loader($this);
		$load->model('LocationModel');
		return $this->LocationModel->getCities($province );
		
	}
	
	function getProfiles($user_id = 0){
		
		$q = "SELECT * FROM $this->table";
		if($user_id)
			$q .= " WHERE user_id=$user_id";
		
		$rows = $this->getQuery($q);	
		
		return $rows;
	}
	
	function updateProfie($data, $id){
		$user = $this->selectOne(' user_id='.$id);

		if($user){
			$this->update($data, ' user_id='.$id);
		}else{
			$data['user_id'] = $id;
			$this->insert($data);
		}
	}
	
}