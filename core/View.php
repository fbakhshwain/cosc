<?php

class Views extends Loader {

	function __construct() {
		parent::__construct($this);
	}
	public function view($name, $data = array())
	{
		$file = base_path('app').'/views/' .$name . '.php';
		if(file_exists($file)){
//			ob_start();
		if(!empty($data)){
			extract($data);
		}
			include_once $file;
//			return ob_get_clean();
		
		}else{
			
			echo 'No View found : ' . $file ;
		}
	}
}
?>