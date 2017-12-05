<?php
session_start();
include_once 'Helper.php';
require_once 'Load.php';
include_once 'View.php';
include_once 'Model.php';
include_once 'Controller.php';

class Bootstrap  {
	
	function __construct(){

		$url = isset($_GET['url'])?$_GET['url']:'home';
		$url = rtrim($url, '/');
		$url = explode('/',$url);

		$class = ucfirst($url[0]);
		
		$controller =  base_path('app') . '/controllers/' .$class . '.php';
		
		if(file_exists($controller)){
			include_once $controller;
		}else{
			include_once base_path('core').'/errors/controller.php';
			return false;
		}
		
		if(!class_exists($class)){
			include_once base_path('core').'/errors/class.php';
			return false;
		}
		
		$controller = new $class;
		
		$method = isset($url[1])? $url[1] : 'index';
		
			if(empty($method) || !method_exists($controller,$method)){
				include_once base_path('core').'/errors/method.php';
				return false;
			}


			
		if(isset($url[2])){
			$controller->{$method}($url[2]);
		}else{
			if(isset($method)){
				
				$controller->{$method}();
			}
		}
	}
}

?>