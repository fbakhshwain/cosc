<?php

class Controller extends Views {
	public $load;
	function __construct() {
		parent::__construct();
		$this->load =  new Loader($this);
	}
	
}
?>