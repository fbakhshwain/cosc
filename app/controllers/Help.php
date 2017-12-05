<?php

class Help extends Controller{
	function __construct(){
		parent::__construct();
		 echo "we are in help.<br />";
	}
	
	public function other( $arg = false) {
		echo "we are inside the help other method <br />";
		echo "Optional Value:". $arg;
	}
}
?>