<?php
class Loader {
	
	function __construct($_that) {
		$this->that = $_that;
	}
	
	function model($model){
	
		$file = base_path("app")."/models/".$model . ".php";
		if(file_exists($file))
		{
			include_once $file;
			$this->that->{$model} = new $model();
			
		}else{
			include_once base_path('core')."/errors/model.php";
			return false;
		}
		
	}
}