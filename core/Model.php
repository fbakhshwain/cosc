<?php

class Model {
	
	function __construct() {
		$db_host= config('db_host');
		$db_user=config('db_user');
		$db_pass=config('db_pass');
		$db_name=config('db_name');
		
		$this->conn = mysqli_connect ($db_host, $db_user,$db_pass,$db_name);
		
		if (mysqli_connect_errno()) {
			printf("Connect failed: %s\n", mysqli_connect_error());
			exit();
		}
	}
	
	function clean($data){
		$new=[];
		foreach($data as $k=>$v){
			$new[$k]= mysqli_real_escape_string($this->conn, $v);
		}
		
		return $new;
	}
	
	function update($data, $where=''){
		$data = $this->clean($data);
		$set = "";
		foreach($data as $k=>$v){
			$set .= "$k='$v', ";
		}
		$set = rtrim($set, ", ");
		
		$q = "UPDATE $this->table SET $set";
		if($where){
			$q .= " WHERE $where";
		}
		
		return $result = mysqli_query($this->conn, $q);
		
	}
	
	function insert($data){
		$data = $this->clean($data);
		
		$col="";
		$val ="";
			foreach($data as $k=>$v){
			$col .= "$k, ";
			$val .= "'$v', "; 
		}
		
		$col = rtrim($col, ", ");
		$val = rtrim($val, ", ");
		
		echo $q =  "INSERT INTO $this->table ($col) VALUES ($val)";
	
		$result = mysqli_query($this->conn, $q); 
		
		return mysqli_insert_id($this->conn);
	}
	
		
	function select($where=""){
		
		$q = "SELECT * FROM {$this->table}";
		
		if($where)
		$q .= " WHERE $where";
		$result = mysqli_query($this->conn, $q);
		return $result;
	}

	function selectOne($where=""){
		
		$q = "SELECT * FROM {$this->table}";
		
		if($where)
		$q .= " WHERE $where";
	
		$q .= ' LIMIT 1';
		
		$result = mysqli_query($this->conn, $q);
		$row = mysqli_fetch_object($result);
		return $row;
	}
	
	
	function selectAll($where=""){
		
		$q = "SELECT * FROM {$this->table}";
		
		if($where)
		$q .= " WHERE $where";
	
		
		$result = mysqli_query($this->conn, $q);
		
		$rows = [];
		while($row = mysqli_fetch_object($result)){
			$rows[] = $row;
		}
		
		return $rows;
		
	}
	
	function count($where=""){
		
		$q = "SELECT count(1) as count FROM {$this->table}";
		
		if($where)
		$q .= " WHERE $where";
	
	
		$result = mysqli_query($this->conn, $q);
		$row = mysqli_fetch_array($result);
		return $row['count'];
	}
	
	function getWhere($where=""){
		
		$q = "SELECT * FROM {$this->table}";
		
		if($where)
			$q .= " WHERE $where";
	}
	
	function query($q){
		$result = mysqli_query($this->conn, $q);
		
	}
	
	function getQuery($q){
	//	select
		$result = mysqli_query($this->conn, $q);
		$rows = [];
		while($row = mysqli_fetch_object($result)){
			$rows[] = $row;
		}
		
		return $rows;
	}

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

	
}
?>