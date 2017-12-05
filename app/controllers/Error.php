<?php

class Error extends Controller {
	function __construct()
	{
		parent::__construct();
		echo "The contrller is not available.";
		//$this->view->msg = 'This page does not exist';
		$this->view->render('error/index');
	}
}
?>