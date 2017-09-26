<h1> welcome to the website </h1>
	<form id='login' action='login.php' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Login</legend>
<input type='hidden' name='submitted' id='submitted' value='1'/>
 
<label for='username' >UserName*:</label>
<input type='text' name='username' id='username'  maxlength="50" />
 
<label for='password' >Password*:</label>
<input type='password' name='password' id='password' maxlength="50" />
 
<input type='submit' name='Submit' value='Submit' />
 
</fieldset>
</form>

<?php
//assigns the username and password
$username = array("admin", "frank", "money");
$password = array("password", "thepass", "test");

//reads the users input and assigns a name
$user = $_POST['username'];
$pass = $_POST['password'];


//checks to see if the username and password are correct
if($user == $username[count($username)] && $pass == $password[count($password)]) {
    echo "welcome";
}
else {
     echo "wrong input, try again ";
}

?>