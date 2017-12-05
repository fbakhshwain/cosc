<?php

	require_once '../config/config.php';
	function config($index = ''){
	global $configuration;
		if($index){
			if(isset($configuration[$index]))
				return $configuration[$index];
			return '';
		}
		
	}

	function base_path($path = ''){

		list($core, $extra) =	explode('public', $_SERVER['SCRIPT_FILENAME']);
	
		$core . ltrim($path,'/');
		return $core . ltrim($path,'/');
	
	}
 
	function url($url = ''){
	
		return rtrim(config('base_url'),'/').'/'. trim($url,'/');
	}
		// check isLoggedIn
	function isLoged(){
		$is_login= isset($_SESSION['userIsLoggedin']);
		
		return $is_login;
	}
	
	
	function userType($type){
	
		if($_SESSION['userType'] == $type)
			return true;
		return false;
	}
	
	
		// Get IP address
	function getIpAddress(){
		if( ($remote_addr = $_SERVER['REMOTE_ADDR']) == '') {
			$remote_addr = "REMOTE_ADDR_UNKNOWN";
		}

		return $remote_addr;
	}
	
		// Get requested URI
	function getReqUri(){
		if( ($request_uri = $_SERVER['REQUEST_URI']) == '') {
			$request_uri = "REQUEST_URI_UNKNOWN";
		}

		return $request_uri;
	}
		// Get Difference seconds
	function getSecDiff($dbDate){

		$dbDate;
		$cuDate= date('Y-m-d H:i:s');
		//exit();
		$cuDate = new DateTime($cuDate);
		$dbDate = new DateTime($dbDate);
	
		return $diffInSeconds = $cuDate->getTimestamp() - $dbDate->getTimestamp();
	}
		

	function flash($message=''){
		if($message){
			$_SESSION['_flash'] = $message;
		
		}elseif(isset($_SESSION['_flash'])){
			$msg = $_SESSION['_flash'];
			if($message !== false){
		
				$_SESSION['_flash']='';
			}
			
			return $msg;
			
		}
	}
	
	function jobject($data){
		$data = json_encode($data);
		return json_decode($data);
	}
	
	function redirect($url = ''){
		header('location:'.url($url));
		exit();
	}
	