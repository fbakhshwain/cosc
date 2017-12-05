<?php

class LogModel extends Model{
	
	public $table = 'logs';
	
		function logs($log_type, $u_id){
			$remote_addr = getIpAddress();
			$request_uri = getReqUri();
			$cuDate= date('Y-m-d H:i:s');
			$q = "INSERT INTO logs (user_id, remote_addr, request_uri, log_type, log_date) VALUES('$u_id', '$remote_addr', '$request_uri','$log_type','$cuDate')";
			//exit($q);
			$result = mysqli_query($this->conn,$q);
			
		if($log_type=='login' || $log_type=='logout'){
			
			//Update Log Tries to zero if Logged in or Logged out Successfully
			$data=['log_tries'=> '0', 'status'=> '0'];
			$where = "id="."'$u_id'";
			$this->update($data, $where);
		}

	}
	
	function userLogs($type = 'login'){
		$res = $this->getQuery("SELECT username, count(user_id) as total FROM {$this->table} JOIN users ON logs.user_id=users.id WHERE log_type='{$type}' GROUP BY user_id ORDER BY total DESC");
		return $res;
	
	}
	
	function lastLogin(){
		$u_id = $_SESSION["u_id"];
		$where = "user_id='$u_id' AND log_type ='login' ORDER BY log_id DESC LIMIT 1 OFFSET 1";
		$result = $this->select($where);
		$row = mysqli_fetch_assoc($result);
		if($last_date = $row['log_date']){
			$last_date = date("d-m-Y", strtotime($last_date));
		}else {
			$last_date = date('d-m-Y');
		}

		return $last_date;
	}
	
	function allLoginAttempts(){

		
		$where = "date(log_date) = '".date('Y-m-d')."' AND (log_type='login' OR log_type='fail' OR log_type='invalid')";
	
		$count = $this->count($where);
		$_SESSION['attempts'] = $count;
		return $count;
	}
}