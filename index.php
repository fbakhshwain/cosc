
<!DOCTYPE HTML>
<?php session_start();?>
<html>
<title>cosc4806 </title>
 <h1>welcome to the website</h1><br>
      <a href="aboutme.php"target="_blank">About Me</a><br>

	
<form  action='login.php' method='post' accept-charset='UTF-8'>
 <fieldset>
 <legend>Welcome</legend>
 press the button to go to <strong> profile</strong>
<input type='submit' name='Submit' value='Profile' />
 
</fieldset>
</form>
<?php $_SESSION['$loginCheckTries']= 0;?>
