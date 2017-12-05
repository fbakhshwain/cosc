<?php

class UserModel extends Model{
	
	public $table = 'users';
	
	function userExist($username, $user_id = 0){
	
		if($user_id){
			$result = $this->selectOne("username='$username' AND id!=$user_id");
		}else{
			$result = $this->selectOne("username='$username'");
		}
		
		if($result)
			return true;
		
		return false;
	}
	
	
	

	function userUpdateById($data,$id){
		$where = 'id ='.$id;
		$this->update($data, $where);
	}

	function userSelectById($data,$id){
		$where = 'id ='.$id;
		$this->select($where);
	}

	function userSignup($data){
		return $this->insert($data);
	}
	
	
	function checkLogin($username,$password){
		if (isset($_POST['submit'])){
			$username = mysqli_real_escape_string($this->conn,$_POST['username']);
			$pwd = mysqli_real_escape_string($this->conn,$_POST['password']);
			
			// check if empty
			if (empty($username)|| empty($pwd)){
				$this->logs('invalid', 0);
							
					flash("your user name or passwords were not filled ");
					redirect('home');
			}else{
				$where = "username='$username'";
				$result = $this->select($where);
				$resulteCheck = mysqli_num_rows($result);
				// check if user name exist
				if ($resulteCheck < 1){
				 	flash("your user name doesnt exist");
					redirect('home');
					
				}else{
					if($row= mysqli_fetch_assoc($result)){
						// dehashing the password
						
						$hashPwdCheck= password_verify($pwd,$row['password']);
						
						
							$where = "username =". "'$username'";
							$row = $this->selectOne($where);
						
							//Geting the User Id and Log tries
							$u_id = $row->id;
							$userType = $row->user_type;
							$profile = $row->profile;
							$log_tries = $row->log_tries;
							$log_status = $row->status;
							if($log_status==1){
								$q = "SELECT * FROM logs WHERE user_id='$u_id' ORDER BY log_date DESC LIMIT 1";
								$result = mysqli_query($this->conn,$q);
								$row = mysqli_fetch_assoc($result);
								$log_time = $row['log_date'];
								$tryAfter = getSecDiff($log_time);
								if($tryAfter>=60){
									$data=['status'=> '0', 'log_tries'=> '0'];
									$where = "id='$u_id'";
									$this->update($data, $where);
									$log_tries="";
								}else{
									$tryAfter = 60 - $tryAfter;
									flash("You have exceeded maximum login retries.<br /> Please try after $tryAfter Seconds");
									redirect('home');
					
								}
							}
						// cheking if password is correct
						if ($hashPwdCheck == false){

							$log_tries++;
							$data=['log_tries'=> $log_tries];
							$where = "id="."'$u_id'";
							$this->update($data, $where);
							
							if($log_tries>=3){
								//Update Log Tries to zero if Logged in Successfully
								$data=['status'=> '1'];
								$where = "id='$u_id'";
								$this->update($data, $where);
								flash("You have exceeded maximum login retries.<br /> Please try after 60 Seconds");
								redirect('home');
					
							}
							
							flash("your user password was worng. You have $log_tries unsucessful tries.");
							$this->logs('fail', $u_id);
							redirect('home');
					
						}elseif($hashPwdCheck== true){

							$_SESSION['currentUser'] = $username;
							$_SESSION['u_id'] = $u_id;
							$_SESSION['currentPassWord'] =$password;
							$_SESSION['userIsLoggedin'] = true;
							$_SESSION['userType'] = $userType;
							$_SESSION['profile'] = $profile;
							//write logs in database
							$message ="you are now loged in";
							$_SESSION['respodMSG']=$message;
							$this->logs('login', $u_id);
							
							$data=['last_login'=> date('Y-m-d H:i:s')];
							$where = "id='$u_id'";
							$this->update($data, $where);
						
							redirect('user');
					
						}
					}
				}
			}
		}else{
			flash("please login or signup");
			
			redirect('home');
			
		}

	}
	
	function joinReport(){
		$q = "SELECT u.username,pd.email,pd.firstname,pd.lastname,pd.phone_number,pd.birthday,u.last_login, count(n.username) as total_reminder FROM users AS u LEFT JOIN personalDetails AS pd ON u.id=pd.user_id Left Join notes as n ON u.username=n.username GROUP BY u.username";
		
		return $this->getQuery($q);
	}
	
	function userLogout(){
		$username = $_SESSION["currentUser"];
		$u_id = $_SESSION['u_id'];
		session_destroy();
		$this->logs('logout', $u_id);
		redirect('home');
	}

	function userSelectAll(){
		$this->select();
	}
	
	function getUsers($user_id = 0){
		$q = "SELECT * FROM $this->table";
		
		if(is_array($user_id)){
			$user_ids = implode(',',$user_id);
			$q .= " WHERE id IN ($user_ids)";
			
		}elseif($user_id){
			$q .= " WHERE id=$user_id";
		}
		
		$rows = $this->getQuery($q);	
		
		return $rows;
	}
	
	function remove($id){
		$this->query("DELETE FROM logs WHERE user_id=".$id);
		$this->query("DELETE FROM personalDetails WHERE user_id=".$id);
		$this->query("DELETE FROM notes WHERE user_id=".$id);
		$this->query("DELETE FROM staff_manager WHERE staff_id=".$id . " OR manager_id=".$id);
		$this->query("DELETE FROM $this->table WHERE id=".$id);
	}

	function userDelete(){
		$this->select();
	}
	
		
	function deleteUser($where=""){
		
		$q = "DELETE FROM {$this->table}";
		
		if($where)
			$q .= " WHERE $where";
		
	}

	function getUserId($where=""){
		
		$q = "SELECT id FROM {$this->table}";
		
		if($where)
			$q .= " WHERE $where";

		$result = mysqli_query($this->conn, $q);

		$row = mysqli_fetch_assoc($result);
		$id = $row['id'];
		
		return $id;
	}
	
	function getUserById($where=""){
		if($where)
			$where =  ' id='.$where;
		$row = $this->selectOne($where);
		return $row;
	}	
	
	function getUserByRole($where=""){
		if($where)
			$where =  " user_type='$where'";
		return $this->selectAll($where);
	}	

}