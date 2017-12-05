<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	
	<link rel="stylesheet" type="text/css" href="<?php echo url('css/font-awesome.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo url('css/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo url('css/style.css') ?>">
	<script>base_url="<?php echo url('/') ?>";</script>
	<script src="<?php echo url('js/jquery.min.js') ?>"></script>
	<script src="<?php echo url('js/bootstrap.min.js') ?>"></script>
	<script src="<?php echo url('js/script.js') ?>"></script>
	
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>

<?php

if(!isLoged(false)){
	include 'public_header.php';	
}else{
	include 'private_header.php';	
} 